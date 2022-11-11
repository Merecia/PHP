<?php


namespace App\Services\Currencies;


use App\Services\Currencies\Contracts\Currency;
use App\Services\Currencies\Contracts\CurrencyContract;
use App\Services\Currencies\Contracts\CurrencyException;
use Illuminate\Support\Facades\Cache;

class CbrCurrencyService implements CurrencyContract
{
    protected $cacheTime = 120;
    public function __construct()
    {
    }

    public function getRubExchangeRateTo($target) : float
    {
        $url = 'https://www.cbr-xml-daily.ru/daily_json.js';

        $data = json_decode(file_get_contents($url))->Valute;

        $rate = $data->$target->Value / $data->$target->Nominal;

        return $rate;
    }

    public function convertToRub($currency, $sum) : float
    {
        $rate = $this->getRubExchangeRateTo($currency);

        return $sum * $rate;
    }

    public function convertFromRub($currency, $sum) : float
    {
        $rate = $this->getRubExchangeRateTo($currency);

        return $sum / $rate;
    }

    public function convert(string $from, string $to, float $sum): float
    {
        if ($from == $to) return $sum;

        if ($from == "RUB") return $this->convertFromRub($to, $sum);

        if ($to == "RUB") return $this->convertToRub($from, $sum);

        $sumInRub = $this->convertToRub($from, $sum);

        return $this->convertFromRub($to, $sumInRub);
    }

    public function list(): array
    {   
        $response = Cache::get("fixer_symbols");

        if (!$response)
        {
            $url = 'https://www.cbr-xml-daily.ru/daily_json.js';
            $data = json_decode(file_get_contents($url))->Valute;

            forEach($data as &$item)
            {
                $response[$item->CharCode] = $item->Name;
            }

            Cache::set("fixer_symbols", $response , $this->cacheTime);
        }

        return $response;
    }
}

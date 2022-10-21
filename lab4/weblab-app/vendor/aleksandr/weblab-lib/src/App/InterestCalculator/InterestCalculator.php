<?php

    namespace Aleksandr\InterestCalculator;

    class InterestCalculator {
        
        private $amountOwed;
        private $amountOwedPlusSimpleInterest;
        private $amountOwedPlusCompoundInterest;
        private $interestRate;
        private $paymentYears;

        function __construct($amountOwed, $interestRate, $paymentYears) {
            $this->amountOwed = $amountOwed;
            $this->interestRate = $interestRate;
            $this->paymentYears = $paymentYears;
        }

        function displayInfo() {   
            echo "Сумма долга: " . $this->amountOwed . " грн." .
            "<br>" . "Процентная ставка: " . $this->interestRate . " %" .
            "<br>" . "Сколько лет выплачивать?: " . $this->paymentYears . " лет.";
        }

        function getAmountOwedPlusWithSimpleInterest() {

            $this->amountOwedPlusSimpleInterest = 
            $this->amountOwed * (1 + $this->interestRate/100 * $this->paymentYears);

            echo "<br>" . "Сумма долга с простыми процентами: " . 
            $this->amountOwedPlusSimpleInterest . 
            " грн.";
        }

        function getAmountOwedPlusWithCompoundInterest() {

            $this->amountOwedPlusCompoundInterest =
            $this->amountOwed * pow((1 + $this->interestRate/100), $this->paymentYears);

            echo "<br>" . "Сумма долга со сложными процентами: " .
            $this->amountOwedPlusCompoundInterest .
            " грн.";
        }
    }

?>
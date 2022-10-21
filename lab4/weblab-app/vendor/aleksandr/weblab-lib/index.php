<?php

    namespace Aleksandr;

    require_once __DIR__ . '/vendor/autoload.php';

    use Aleksandr\InterestCalculator\InterestCalculator;

    $calculator = new InterestCalculator(10000, 3.875, 5);
    $calculator->displayInfo();
    $calculator->getAmountOwedPlusWithSimpleInterest();
    $calculator->getAmountOwedPlusWithCompoundInterest();

?>
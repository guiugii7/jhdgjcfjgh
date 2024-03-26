<?php
function currencyConverter($amount, $currency)
{
    switch ($currency) {
        case "доллар":
            $convertedAmount = $amount * 1.15; // Предположим, что 1 доллар = 1.15 евро
            return $convertedAmount;
        case "евро":
            $convertedAmount = $amount * 0.87; // Предположим, что 1 евро = 0.87 доллара
            return $convertedAmount;
        case "фунт":
            $convertedAmount = $amount * 0.78; // Предположим, что 1 фунт = 0.78 доллара
            return $convertedAmount;
        default:
            return "Выбранная валюта не поддерживается";
    }
}

$amount = 100; // Сумма для конвертации
$currency = "евро"; // Валюта для конвертации

$result = currencyConverter($amount, $currency);
echo "Конвертированная сумма: $result $";
?>
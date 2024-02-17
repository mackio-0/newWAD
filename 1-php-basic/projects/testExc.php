<?php

$exchangeRates = json_decode(file_get_contents("http://forex.cbm.gov.mm/api/latest"))->rates;

// mmk -> usd
// usd -> sgd, usd -> mkk, mkk -> sgd
// sourceCurrency targetCurrency amount

// if ($_POST["sourceCurrency"] === $_POST["targetCurrency"]) :

?>

<?php

if (isset($_POST["convert"])) :
    $source = $_POST["sourceCurrency"];
    $amount = $_POST["amount"];
    $target = $_POST["targetCurrency"];

    if ($source === "MMK" || $target === "MMK") {
        if ($source === "MMK") {
            $result = $amount / str_replace(",", "", $exchangeRates->$target);
        } else if ($target === "MMK") {
            $result = $amount * str_replace(",", "", $exchangeRates->$source);
        }
    } else {
        $mmk = $amount * str_replace(",", "", $exchangeRates->$source);
        $result = $mmk / str_replace(",", "", $exchangeRates->$target);
    }





?>

    <div class=" bg-white p-3 rounded-lg">
        <p class=" text-md mb-0 text-gray-600">
            <?= $amount ?> <?= $source ?> is equal to
        </p>
        <p class=" text-3xl font-semibold">
            <?= round($result, 2) ?> <?= $target ?>
        </p>
    </div>

<?php endif; ?>
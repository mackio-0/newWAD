<?php

// print_r($_POST);



// $mmk = $amount * $from_currency_rate;
// $to = round($mmk / $to_currency_rate, 2);

if (isset($_POST["convert"])) :

    $amount = $_POST["amount"];
    $from_currency_array = explode("-", $_POST["from_currency"]);
    $from_currency_name = $from_currency_array[0];
    $from_currency_rate = floatval(str_replace(",", "", $from_currency_array[1]));

    $to_currency_array = explode("-", $_POST["to_currency"]);
    $to_currency_name = $to_currency_array[0];
    $to_currency_rate = floatval(str_replace(",", "", $to_currency_array[1]));

    if ($from_currency_name === "MMK" || $to_currency_name === "MMK") {
        if ($from_currency_name === "MMK") {
            $result = round($amount / $to_currency_rate, 2);
        } else if ($to_currency_name === "MMK") {
            $result = round($amount * $from_currency_rate, 2);
        }
    } else {
        $mmk = $amount * $from_currency_rate;
        $result = round($mmk / $to_currency_rate, 2);
    }

    $fileName = "saveExchRecord.txt";
    if (!file_exists($fileName)) {
        touch($fileName);
    }

    date_default_timezone_set('Asia/Yangon');
    $currentDate = date("d/m/Y, g:i a");

    $stream = fopen($fileName, "a");
    fwrite($stream, "\n$amount $from_currency_name equal to $result $to_currency_name.-$currentDate");
    fclose($stream);


?>

    <div class=" bg-white p-3 rounded-lg my-3">
        <p class=" text-md mb-0 text-gray-600">
            <?= $amount ?> <?= $from_currency_name ?> is equal to
        </p>
        <p class=" text-3xl font-semibold">
            <?= $result ?> <?= $to_currency_name ?>
        </p>
    </div>

<?php endif; ?>
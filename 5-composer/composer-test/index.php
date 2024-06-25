<?php
require_once "./vendor/autoload.php";

use GuzzleHttp\Client;


$client = new Client();
$respond = $client->request("GET", 'https://fakestoreapi.com/products/1');

$data = $respond->getBody();
echo $data;


// use Monolog\Handler\StreamHandler;
// use Monolog\Level;
// use Monolog\Logger;

// // create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('logs/my.log', Level::Warning));

// // add records to the log
// $log->warning('Foo');
// $log->error('Bar');
// $log->error('MKK');
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require $_SERVER['DOCUMENT_ROOT'] . '/../../vendor/autoload.php';

use WeStacks\TeleBot\TeleBot;

session_start();

$bot = new TeleBot([
    'token' => '6150250260:AAFwTp-UQAga6P54gQlp5JY3qpIkeBA7A6c',
    'name' => 'CreelayerTestBot',
    'api_url' => 'https://api.telegram.org/bot{TOKEN}/{METHOD}',
    'exceptions' => true,
    'async' => false,
    'handlers' => []
]);

$file = $_SERVER['DOCUMENT_ROOT'] . "/asgard-apartment/storage.csv";


if (!is_file($file)) {
    exit('Empty group');
}

$ref = '';

if(!empty($_SESSION['ref']))
    $ref = $_SESSION['ref'];

$fp = fopen($file, 'r');
try {
    while (($item = fgetcsv($fp)) !== FALSE) {
        $id = $item[0];
        $bot->sendMessage([
            'chat_id' => $item[0],
            'text' => "🔔 НОВАЯ ЗАЯВКА\nЛогин наставника: $ref \nИмя: {$_POST['name']}\nФамилия: {$_POST['surname']}\nТелефон: {$_POST['country-code']}{$_POST['phone']}"
        ]);
    }
} finally {
    fclose($fp);
}


header("location: ./success.html");





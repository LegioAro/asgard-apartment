<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function dd($data)
{

    echo '<pre>';

    print_r($data);
    exit();
}

require __DIR__ . '/../../vendor/autoload.php';

use WeStacks\TeleBot\Handlers\CommandHandler;
use WeStacks\TeleBot\Handlers\UpdateHandler;
use WeStacks\TeleBot\Objects\Update;
use WeStacks\TeleBot\TeleBot;
use lib\BotUpdateHandler;



try {


    $bot = new TeleBot([
        'token' => '6183144752:AAGxd7Sfr8Azd5pTRjTV1dTa5iAW-XM1Nyc',
        'name' => 'CreelayerTestBot',
        'api_url' => 'https://api.telegram.org/bot{TOKEN}/{METHOD}',
        'exceptions' => true,
        'async' => false,
        'handlers' => []
    ]);

    $bot->sendMessage([
        'chat_id' => -998229626,
        'text' => 'Hello, World!1'
    ]);


} catch (Exception $e) {
    file_put_contents("test.txt", $e->getMessage(), FILE_APPEND);
    file_put_contents("test.txt", "\n", FILE_APPEND);
}


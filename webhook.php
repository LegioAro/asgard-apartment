<?php

require $_SERVER['DOCUMENT_ROOT'] . '/../../vendor/autoload.php';

use lib\AddGroupBotHandler;
use lib\BotUpdateHandler;
use WeStacks\TeleBot\Objects\Update;
use WeStacks\TeleBot\TeleBot;


try {


    $bot = new TeleBot([
        'token' => '6150250260:AAFwTp-UQAga6P54gQlp5JY3qpIkeBA7A6c',
        'name' => 'CreelayerTestBot',
        'api_url' => 'https://api.telegram.org/bot{TOKEN}/{METHOD}',
        'exceptions' => true,
        'async' => false,
        'handlers' => []
    ]);


    $bot->addHandler(BotUpdateHandler::class);
    $bot->addHandler(AddGroupBotHandler::class);

    $bot->handleUpdate(
        new Update(json_decode(file_get_contents('php://input'), true))
    );


} catch (Exception $e) {
    file_put_contents($_SERVER['DOCUMENT_ROOT'] ."/asgard-apartment/update.log", $e->getMessage(), FILE_APPEND);
    file_put_contents($_SERVER['DOCUMENT_ROOT'] ."/asgard-apartment/update.log", "\n", FILE_APPEND);
}


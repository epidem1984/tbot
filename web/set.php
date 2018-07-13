<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '600271674:AAHqh1KhMYCcZpk78tJfHL_CglUVDdOAGOk';
$bot_username = 'PrintCat';
$hook_url = 'https://shielded-scrubland-10392.herokuapp.com/path/to/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}
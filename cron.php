<?php

/**
 * This file is part of the PHP Telegram Bot example-bot package.
 * https://github.com/php-telegram-bot/example-bot/
 *
 * (c) PHP Telegram Bot Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * This file is used to run a list of commands with crontab.
 */

// Your command(s) to run, pass them just like in a message (arguments supported)
$commands = [
    '/whoami',
    "/echo I'm a bot!",
];

// Load composer
require_once __DIR__ . '/application/third_party/vendor/autoload.php';



try {
    $bot_api_key  = '1531265288:AAGTjottqDKIVhmZIrE51-Z9xiRQCc8f968';
    $bot_username = 'toduwoid_bot';
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    /**
     * Check `hook.php` for configuration code to be added here.
     */
    // Run user selected commands

    if($telegram->runCommands($commands)){
        echo "ada";
    }else{
        echo "tidak";
    }
    


} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Log telegram errors
    echo Longman\TelegramBot\TelegramLog::error($e);

    // Uncomment this to output any errors (ONLY FOR DEVELOPMENT!)
    // echo $e;
} catch (Longman\TelegramBot\Exception\TelegramLogException $e) {
    // Uncomment this to output log initialisation errors (ONLY FOR DEVELOPMENT!)
     echo $e;
}
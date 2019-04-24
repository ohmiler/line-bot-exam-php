<?php



require "vendor/autoload.php";

$access_token = 'YpfYu1Dc2TDnzHQ91zIN4bRYqGVafr2Bbh7R3SL7hra2CtPlrHmesgIvNzilJS8oUUiFmCgCuPbJG86G8G7Eob0cjxbywfMNrM9lL8rtqijSyM84nGQsHdFMSq9kiYq+VhO364veP3rgGMNCbP7HRgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '55da7a413e21568bb9474267d6cd564f';

$pushID = 'U017da59b8b1854aff041828057ba2faf';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








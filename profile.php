<?php


$access_token = 'YpfYu1Dc2TDnzHQ91zIN4bRYqGVafr2Bbh7R3SL7hra2CtPlrHmesgIvNzilJS8oUUiFmCgCuPbJG86G8G7Eob0cjxbywfMNrM9lL8rtqijSyM84nGQsHdFMSq9kiYq+VhO364veP3rgGMNCbP7HRgdB04t89/1O/w1cDnyilFU=';

$userId = 'U017da59b8b1854aff041828057ba2faf';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;


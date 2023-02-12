<?php
 
$token = '6035523262:AAFK2_S73CInNjXXJTLQwDBSa56iwLu7st0';
$link = 'https://api.telegram.org:443/bot'.$token.'';
 
$getupdate = file_get_contents('php://input');
 
$responsearray = json_decode($getupdate, TRUE);

$chattext = strtolower($responsearray['message']['text']);
$chatid = $responsearray['message']['chat']['id'];


$parameter['chat_id'] = $chatid;
$parameter['text'] = "hello";

$request_url = $link.'/sendMessage?'.http_build_query($parameter); 
file_get_contents($request_url);
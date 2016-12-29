<?php
require_once 'vendor/autoload.php';

$url = 'http://pokeapi.co/api/v2/pokemon/?limit=1000';
$client = new GuzzleHttp\Client();
//$res = $client->request('GET', $url);
//
//$content = $res->getBody();

$response = $client->get($url);
$contentStream = $response->getBody();
$content = $contentStream->getContents();
$obj = json_decode($content, true);
$list = $obj['results'];
foreach($list as $item){
    echo $item['name'] . '<br>';
}
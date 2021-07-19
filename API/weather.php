<?php

$url = "https://www.jma.go.jp/bosai/forecast/data/forecast/130000.json";

$json = file_get_contents($url);
$data=json_decode($json,true);

$publisher = $data[0]['publishingOffice'];

$publish_time = $data[0]['reportDatetime'];

$area = $data[0]['timeSeries'][0]['areas'][0]['area']['name'];

$today = $data[0]['timeSeries'][0]['areas'][0]['weathers'][0];

$tomorrow = $data[0]['timeSeries'][0]['areas'][0]['weathers'][1];

$dayAfterTomorrow = $data[0]['timeSeries'][0]['areas'][0]['weathers'][2];



echo '発表者 : '.$publisher.'</br>';
echo '報告日時 : '.$publish_time.'</br>';
echo '対象地域 : '.$area.'</br>';
echo '今日の天気 : '.$today.'</br>';
echo '明日の天気 : '.$tomorrow.'</br>';
echo '明後日の天気 : '.$dayAfterTomorrow.'</br>';


//var_dump($data);
//var_dump(json_decode($json));
//var_dump(json_decode($json, true));

//print_r($data);





?>


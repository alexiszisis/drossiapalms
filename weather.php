<?php

$jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=London,uk";
$json = file_get_contents($jsonurl);

$weather = json_decode($json);
$kelvin = $weather->main->temp;
$celcius = $kelvin - 273.15;

?>
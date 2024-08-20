<?php

$cities = ["London", "Paris", "Brisbane", "Dublin"];

$city = $cities[2];

echo $city;

echo"<br>";

$cityPosition = array_rand($cities); 

$city = $cities[$cityPosition];

echo $city;
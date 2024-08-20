<?php
date_default_timezone_set('Europe/Tirane');

$ramadanDay = strtotime("29 march 2025");

$currentTime = time();

$seconds = $ramadanDay - $currentTime;

$minutes = $seconds / 60;  

$hours = $minutes /60;

$days = $hours /24;

echo " There are $days days untill Ramadan";
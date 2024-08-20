<?php

$temperatures = array (32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 
31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 
30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 
30.6); 

$averageTemperature = round(array_sum($temperatures) / count($temperatures), 1);

sort($temperatures);

$lowestTemperatures = array_slice($temperatures, 0, 5 );
$highestTemperatures = array_slice($temperatures, -5);

echo "The average daily temperature is {$averageTemperature}°C\n";
echo "<br>";
echo "The 5 lowest temperatures are: " . implode(" °C ", $lowestTemperatures) . " °C\n";
echo "<br>";
echo "The 5 highest temperatures are: " . implode(" °C ", $highestTemperatures) . " °C\n";

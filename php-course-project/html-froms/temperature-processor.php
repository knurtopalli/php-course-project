<?php

if(isset($_POST['submit'])){
    $temperature = $_POST['temperature'];
    $units = $_POST['units'];
    $accuracy = $_POST['accuracy'];
    if($units == "C"){
        $convertedTemperature = $temperature * 9/5 + 32;
    }else{
        $convertedTemperature = ($temperature -32) * 9/5;
    }
    $convertedTemperature = round($convertedTemperature,1);
    echo"The converted temperature is $convertedTemperature, $units to $accuracy decimal places";
}
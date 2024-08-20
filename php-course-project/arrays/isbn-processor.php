<?php

if(isset($_POST['submit'])){
    $isbn = $_POST['isbn'];

    $total = 0;
    $i = 1;

    $digits = str_split($isbn);

    foreach($digits as $digit){
        $total += $digit * $i;
        $i++;
    }

    if($total %11 == 0){
        echo "Valid";
    }else{
        echo "Invalid";
    }
}
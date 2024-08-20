<?php

$evenCount = 0;
$oddCount = 0;

for ($i = 1; $i <= 100; $i++) {
    $randomNumber = rand(1,100);

    if ($randomNumber %2 == 0) {
        $evenCount++;
    }else {
        $oddCount++;
    }
}

echo " " . $evenCount . " " .$oddCount;

?>
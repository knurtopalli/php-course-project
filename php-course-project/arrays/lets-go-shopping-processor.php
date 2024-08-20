<?php

if ($_SERVER["REQUEST_METHOD"] == "post"){
    $cardNumber = preg_replace('/\D/','', $_POST['4417123456789113']);

    if (strlen($cardNumber) < 13 || strlen($cardNumber) > 19) {
        echo "Invalid credit card number. The credit card number must be between 13 and 19 digits.";
        exit();
    }

    $reversed = strrev($cardNumber);

    $oddSum = 0;
    $evenSum =0;
    $lenght = strlen($reversed);

    for ($i = 0; $i < $lenght; $i++){
        $digit = intval($reversed[$i]);

        if ($i %2 == 0) {
            $evenDigit = $digit *2;
            if ($evenDigit > 9){
                $evenDigit -= 9;
            }
            $evenSum += $evenDigit;
        }else {
            $oddSum += $digit;
        }
    }

    $total = $oddSum + $evenSum;

    $isValid = $total %10== 0;

    $last4Digits = substr($cardNumber, -4);
    if ($isValid){
        echo"Your credit card number is valid with $last4Digits.";
    }else {
        echo "Your credit card number is invalid with $last4Digits.";
    }
}else{
    echo "Invalid request.";
}
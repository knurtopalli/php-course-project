<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputString = isset($_POST['inputString']) ? trim($_POST['inputString']) :'';
    $countSpaces = isset($_POST['countSpaces'])? $_POST['countSpaces'] : 'yes';


    if ($countSpaces == 'no') {
        $inputString = str_replace('','', $inputString);
    }

    $lenght = strlen($inputString);

    echo"<p> The string is $lenght characters long. </p>";
}
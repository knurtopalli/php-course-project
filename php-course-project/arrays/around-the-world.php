<?php

$cities = array("London","Paris","Amsterdam","New York","Berlin","Brisbane") ;

sort($cities);

echo"<ol>";

foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo "</ol>";

array_push($cities,"Sydney", "Helsinki", "Beijing", "Dublin", "Rome");

sort($cities);

echo "<ol>";

foreach ($cities as $city){
    echo "<li>$city</li>";
}

echo "</ol>";
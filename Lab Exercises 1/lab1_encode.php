<?php

//associative array
$array = array(
    'name' => 'Maria',
    'age' => 21,
    'course' => 'IT'
);

$jsonString = json_encode($array);

echo $jsonString;
?>
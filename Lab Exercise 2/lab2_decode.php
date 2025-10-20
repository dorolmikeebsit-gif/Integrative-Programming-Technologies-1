<?php
$jsonString = '{"name":"Mikee","age":21,"email":"dorolmikee_bsit@plmun.edu.ph"}';


$phpObject = json_decode($jsonString);


$phpArray = json_decode($jsonString, true);



echo "Object:<br>";
echo "Name: " . $phpObject->name . "<br>"; 
echo "Email: " . $phpObject->email . "<br><br>";


echo "Array:<br>";
echo "Name: " . $phpArray['name']."<br>";  
echo "Email: " . $phpArray['email']."<br>";
?>

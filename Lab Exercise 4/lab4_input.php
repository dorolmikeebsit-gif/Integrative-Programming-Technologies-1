<?php
// Step 2: Read raw JSON input
$jsonInput = file_get_contents('php://input');

// Step 3: Decode JSON into PHP associative array
$data = json_decode($jsonInput, true);

// Step 4: Access and display the values
echo "Username: " . $data['username'] . "<br>";
echo "Password: " . $data['password'];
?>

<?php
$jsonData = file_get_contents("php://input");
$data = json_decode($jsonData, true);

if ($data && is_array($data)) {
    // Check kung meron talaga yung mga keys
    $username = isset($data['username']) ? $data['username'] : 'akimi';
    $password = isset($data['password']) ? $data['password'] : '1234';

    echo "Username: " . $username . "<br>";
    echo "Password: " . $password;
} else {
    echo "No JSON input received.";
}
?>
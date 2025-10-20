<?php
// This part runs only when the request is AJAX (fetch POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents("php://input");
    $data = json_decode($input, true);

    // Simple validation
    if ($data['username'] == "Mikee Dorol" && $data['password'] == "1102") {
        $response = [
            "status" => "success",
            "message" => "Welcome, Mikee Dorol!"
        ];
    } else {
        $response = [
            "status" => "error",
            "message" => "Invalid username or password."
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit; // Stop further HTML output
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 5 - AJAX PHP JSON</title>
</head>
<body>
    <h2>Login Form (AJAX + PHP)</h2>
    <form id="loginForm">
        <label>Username:</label>
        <input type="text" id="username"><br><br>
        <label>Password:</label>
        <input type="password" id="password"><br><br>
        <button type="button" onclick="sendData()">Submit</button>
    </form>

    <h3>Server Response:</h3>
    <pre id="response"></pre>

    <script>
        function sendData() {
            let data = {
                username: document.getElementById("username").value,
                password: document.getElementById("password").value
            };

            fetch('lab5.php', {  // Same file handles request
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                document.getElementById("response").textContent = JSON.stringify(result);
            });
        }
    </script>
</body>
</html>

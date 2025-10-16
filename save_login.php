<?php
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = "";     // default XAMPP password is empty
$dbname = "grocery_shop";

// Connect to DB
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}

// Get JSON input
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['username']) && !empty($data['username'])) {
    $name = $conn->real_escape_string($data['username']);
    $sql = "INSERT INTO logins (username) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Login saved"]);
    } else {
        echo json_encode(["status" => "error", "message" => $conn->error]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid input"]);
}

$conn->close();
?>

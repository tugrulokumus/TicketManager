<?php
$servername = "localhost";
$username = "root";
$password = "*123456*";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

echo "Connection successful";


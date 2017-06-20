<?php
$servername = "localhost";
$username = "app";
$password = "1234";
$db = "house";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

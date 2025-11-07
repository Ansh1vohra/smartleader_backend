<?php
// Set custom session path (make sure folder exists and is writable by PHP)
session_save_path(__DIR__ . "/sessions");
if (!file_exists(__DIR__ . "/sessions")) {
    mkdir(__DIR__ . "/sessions", 0777, true);
}

session_start();

$servername = "13.203.154.29";
$username   = "smartleader";
$password   = "Smartleader@123";
$db         = "smartlea_admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

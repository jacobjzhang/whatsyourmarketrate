<?php
// Create connection credentials
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'jacobjzhang';
$db_pass = '';

// Create mySQLi object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Error Handler
if ($mysql->connect_error) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
}

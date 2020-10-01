<?php
$serverName = "docker_mysql_1";
$dbUsername = "root";
$dbPassword = "docker";
$dbName = "todolist";


$conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: ") . $conn->connect_error;
}

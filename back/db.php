<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "picsy";

$conn = mysqli_connect($serverName, $dbUsername, $dbPass, $dbName);

if (!$conn) {
    die("Connection faild: " . mysqli_connect_error());
}

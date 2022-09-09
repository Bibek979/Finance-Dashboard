<?php
$servername = "localhost";
$username = "Akshaya";
$password = "";
$db = "phpdashboard";

// creating Connection

$con = mysqli_connect($servername, $username, $password, $db);

if(!$con) {
    die("Connection Failed: ". mysqli_connect_error());
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "phpdashboard";

// creating Connection

$con = mysqli_connect($servername, $username, $password, $db);

if(!$con) {
    die("Connection Failed: ". mysqli_connect_error());
}
?>
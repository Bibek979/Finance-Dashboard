<?php
session_start();
unset($_SESSION['adminLoginStatus']);
header("Location: ../index.php");
?>
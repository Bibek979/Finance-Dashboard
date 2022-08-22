<?php
session_start();
if(session_destroy()){
    header("Location: ../index.php");
    // echo getcwd()."<br>";
    // chdir("./");
    // echo getcwd()."<br>";
}
?>
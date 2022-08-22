<?php
if(isset($_SESSION['loginStatus'])){
    $loginStatus = $_SESSION['loginStatus'];
    if($loginStatus)
    {
        header("Location: dashboard.php");
    }
    else {
        header("Location: signup.php");
    }
}
else {
    session_start();
    $_SESSION['loginStatus'] = false;
}
?>
<?php
    $amount = $_REQUEST["amount"];
    $reason = $_REQUEST["reason"];
    session_start();
    
    if((isset($_SESSION['loggedInUser']))){
        $curr_user = $_SESSION['loggedInUserID'];
        echo $curr_user;
    }
    else {
        echo "Not Logged IN";
    }
?>
<?php
    $amount = $_REQUEST["amount"];
    $reason = $_REQUEST["reason"];
    $paymentType = $_REQUEST["option"];
    session_start();
    
    if((isset($_SESSION['loggedInUser']))){
        $curr_user = $_SESSION['loggedInUserID'];
        // echo $curr_user;
        include_once 'connection.php';
        $sql = "INSERT INTO savings_expense_table (uid_no, amount, payment_type, Reason) VALUES ( '$curr_user', '$amount', '$paymentType', '$reason')";
        if(mysqli_query($con, $sql)){
            echo "Updated Successfully";
        }
        else {
            echo("Connection failed: " . mysqli_connect_error());
        }
    }
    else {
        echo "Not Logged IN";
    }
?>
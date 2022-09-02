<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Finance Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Support/styles.css">
</head>
<body>
    <?php include_once 'Support/topBar.php';
    ?>

    <form id="login" method="post" action="">
        <label for="email">Email</label>
        <input type="email" name="email" id="loginemail">
        <label for="password">Password</label>
        <input type="password" name="password" id="loginpassword">
        <div class="loginBtns">
            <input type="submit" name="adminLogin"></input>
            <input TYPE="button" VALUE="Back" id="backBtn" onClick="history.go(-1);">
            <?php
            session_start();
            include_once 'Support/impFunction.php';
            $_SESSION['adminLoginStatus'] = false;
            if(isset($_POST['adminLogin'])){
                $adminEmail = $_POST['email'];
                $adminPassword = $_POST['password'];
                if($adminEmail === '' || $adminPassword === '')
                {
                    echo "Fill in username and password";
                }
                else{
                    include 'Support/connection.php';
                    $sql = "SELECT admin_password from admin_table where admin_user_id = '$adminEmail'";
                    $result = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0){
                        $row = mysqli_fetch_assoc($result);
                        if($adminPassword === $row["admin_password"]){
                            $_SESSION['adminLoginStatus'] = true;
                            header("Location: adminDashboard.php");
                            exit;
                        }
                        else {
                            msgDisplayer("Invalid User Name or Password");
                        }
                    }
                    else{
                        msgDisplayer("Login Failed");
                    }
                }
            }
            ?>
        </div>
    </form>
</body>
</html>
<?php
session_start();

// This function is used to keep the user on the login tab
// which is required in shifting to this tab after signing up or after failed login 
function keepOnLoginTab() {
    echo "
                <script type=\"text/javascript\">
                window.addEventListener('load', (event) => {
                    document.getElementById(\"signup\").style.display = \"none\";
                    document.getElementById(\"loginButton\").className=\"clicked\";
                    document.getElementById(\"signUpButton\").className=\"unclicked\";
                    document.getElementById(\"login\").style.display = \"flex\";
                })
                </script>";
}
// function to display all the acknowledgement messages
include 'Support/impFunction.php';

function loginBtnClicked(){
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    if($email === '' || $pwd === ''){
        msgDisplayer("Email or pwd missing");
        keepOnLoginTab();
    }
    else{
        include 'Support/connection.php';
        $sql = "SELECT fname,pwd FROM user_info WHERE email='$email'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($pwd === $row["pwd"]){
                msgDisplayer("Login Successful");
                $_SESSION['loginStatus'] = true;
                $_SESSION['loggedInUser'] = $row["fname"];
                //msgDisplayer($_SESSION['loggedInUser']);
                header("Location: dashboard.php");
                exit;

            }
            else {
                msgDisplayer("Wrong Password");
                keepOnLoginTab();
            }
        }
        else {
            msgDisplayer("User not registered");
            keepOnLoginTab();
        }
        mysqli_close($con);
    }
}
function signUpBtnClicked()
{
    $fname = $_POST['FName'];
    $lname = $_POST['LName'];
    $dob = $_POST['dob'];
    $email = $_POST['Email'];
    $newPwd = $_POST['newPassword'];
    $confNewPwd = $_POST['confPassword'];
    
    if($newPwd === $confNewPwd)
    {
        include 'Support/connection.php';
        $sql = "SELECT fname FROM user_info WHERE email='$email'";
        $query = mysqli_query($con, $sql);
        if(mysqli_num_rows($query) > 0){
            msgDisplayer("User with this mail available");
        }
        else{
            $sql = "INSERT INTO user_info (fname, lname, dob, email, pwd) VALUES ('$fname', '$lname', '$dob', '$email', '$newPwd')";
            $query = mysqli_query($con, $sql);
            if($query){
                msgDisplayer("Successfully Registered");
                keepOnLoginTab();
            }
            else{
                msgDisplayer("Registration Failed");
            }
        }
        mysqli_close($con);
    }
    else{
        msgDisplayer("Password doesn\'t Match");
    }


}
// Starting point for the program after clicking on the buttons either signup or login 
// And in turn they start calling the respective functions to be called and validation happens 
if (isset($_POST['signupbtn'])){
    if($_POST['FName'] === '' || $_POST['LName'] === '' || $_POST['Email'] === '' || $_POST['dob'] === '' || $_POST['LName'] === 'newPassword' || $_POST['confPassword'] === '')
    {
        msgDisplayer("Enter all the details");
    }
    else {
        signUpBtnClicked();
    }
}

if(isset($_POST['loginbtn'])){
    loginBtnClicked();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Dashboard</title>
    <link rel="stylesheet" href="http://localhost/PHP-Dashboard/Support/style.css">
</head>
<body>
    <?php include_once 'Support/header.php';?>    
    <div class="loginSignUpBtn">
        <button id="signUpButton" class="clicked" onclick="signupBtn(true)">Sign Up</button>
        <button id="loginButton" class="unclicked" onclick="signupBtn(false)">Login</button>
    </div>
    
    <section class="loginSignUpSection">
        <div>
            <form id="login" method="post" action="">
                <label for="email">Email</label>
                <input type="email" name="email" id="loginemail">
                <label for="password">Password</label>
                <input type="password" name="password" id="loginpassword">
                <button type="submit" name="loginbtn">Login</button>
            </form>
        </div>
        <form id="signup" method="post" action="">
            <label for="fname">First Name</label>
            <input type="name" name="FName" id="signupfirstname" >            
            <label for="lname">Last Name</label>
            <input type="name" name="LName" id="signuplastname">
            <label for="dob">Date Of Birth</label>
            <input type="date" name="dob" id="dob">
            <label for="email">Email</label>
            <input type="email" name="Email" id="signupemail">
            <label for="password">New Password</label>
            <input type="password" name="newPassword" id="signupnewpwd">
            <label for="confpassword">Confirm Password</label>
            <input type="password" name="confPassword" id="signupconfpwd">
            <div class="formBtns">
                <button type="submit" name="signupbtn">Sign Up !</button>
                <button type="reset">Reset Input</button>
            </div>
        </form>
    </section>
    <?php include_once 'Support/footer.php';?>
    <script src="script.js"></script>
</body>
</html>
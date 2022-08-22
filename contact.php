<?php

function msgDisplayer($msg) {
    echo "
    <script type=\"text/javascript\">alert('$msg')</script>
    ";
}
function contactFormRegistration() {
    include 'Support/connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $sql = "INSERT INTO contact_form (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
    $query = mysqli_query($con, $sql);
    if($query)
    {
        msgDisplayer("successfully inserted");
    }
    else{
        msgDisplayer("Failed to insert");
    }
}


if(isset($_POST['contactBtn'])){
    if($_POST['name'] === "")
    {
        msgDisplayer("Name Field Empty");
    }
    else if($_POST['email'] === "")
    {
        msgDisplayer("No Email Provided");
    }
    else if($_POST['feedback'] === "")
    {
        msgDisplayer("Feedback is empty");
    }
    else {
        contactFormRegistration();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | DB</title>
    <link rel="stylesheet" href="./Support/style.css">
</head>
<body>
    <?php include_once 'Support/header.php';?>
    <h4 class="contactFormHeading">Contact us !</h4>
    <form class="contactForm" method="post">
        <label>Name: </label>
        <input type="text" name="name"></input>
        <label>email : </label>
        <input type="email" name="email"></input>
        <label>Feedback : </label>
        <textarea name="feedback" placeholder="Give Some FeedBack !!" rows="4"></textarea>
        <button type="submit" name="contactBtn">Submit Now !</button>
    </form>
    <?php include_once 'Support/footer.php';?>
</body>
</html>
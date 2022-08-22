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
    <?php include_once 'Support/topBar.php';?>
    <form id="login" action="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="loginemail">
        <label for="password">Password</label>
        <input type="password" name="password" id="loginpassword">
        <div class="loginBtns">
            <input type="submit"></input>
            <input TYPE="button" VALUE="Back" id="backBtn" onClick="history.go(-1);">
        </div>
    </form>
</body>
</html>
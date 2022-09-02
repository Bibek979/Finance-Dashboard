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
    <?php include_once 'Support/navbar.php';?>
    <h1 style="text-align: center;">Admin Home</h1>
    <section id="adminDashboardPartition">
        <div class="impTickets">
            <h2>Pending Tickets</h2>
            <ol>
                <li>Issue in getting data to dashboard</li>
                <li>Dashboard Issue</li>
            </ol>
        </div>
        <div class="incomingMsgs">
            <h2>Queries</h2>
            <ol>
        <?php
        include_once 'Support/connection.php';
        $query = "SELECT feedback FROM contact_form";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<li>".$row['feedback'];
            }
        }
        else{
            echo "<span>Nothing here yet";
        }
        ?>
            </ol>
        </div>
    </section>
</body>
</html>
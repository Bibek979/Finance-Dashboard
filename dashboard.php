<?php
session_start();
$wish = "Good Morning";
$hour = date('H');
if($hour>01 && $hour<12){
    $wish = "Good Morning";
}
else if($hour>12 && $hour<15) {
    $wish = "Good Afternoon";
}
else if($hour>15 && $hour<22) {
    $wish = "Good Evening";
}
else {
    $wish = "Good Night";
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="./Support/GoogleCharts.js"></script>
</head>
<body>
    <?php include_once 'Support/header.php';?>
    <section class="dashboard">
        <div>
            <?php
                $user = $_SESSION['loggedInUser'];
                echo "<h4>$wish $user</h4>";
            ?>
            
            <div class="DashboardSideButtons">
                <img src="./Resources/plusIcon.png" alt="PlusICon">Savings
                <img src="./Resources/minusIcon.png" alt="MinusIcon" srcset="">Expenses 
            </div>
        </div>
        <div>
            <div class="smallCards">
                <!-- LM stands for Last Month -->
                <div class="LMExpenseCard">
                    <span class="lmte">Last Month Total Expense<br>
                    &#x20B9;5000</span>
                </div>
                <div class="LMSavingsCard">
                <span class="lmts">Last Month Total Savings<br>
                    &#x20B9;5000</span>
                </div>
                <div class="TargetRemaining">
                    <span class="lmts">Target Remaining<br>
                    &#x20B9;5000</span>
                </div>

            </div>

            <div class="cards" id="cards">
                <div class="savingsCard" id="savingsCard">
                    Hello
                </div>
                <div class="expenseCard" id="expenseCard">
                    Expense Here
                </div>
                <div class="goalCard" id="goalCard">
                    Goal Here
                </div>
            </div>
            <div class="graphs" id="graphs">
                <center>
                <h3>Recent Transactions</h3>
                <table>
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Debit/Credit</th>
                        <th>Reason</th>    
                    </tr>
                    <tr>
                        <td>02-May-2002</td>
                        <td>1000</td>
                        <td>Credit</td>
                        <td>Birthday Party</td>
                    </tr>
                    <tr>
                        <td>03-May-2002</td>
                        <td>3000</td>
                        <td>Debit</td>
                        <td>Google Shopping</td>
                    </tr>
                    <tr>
                        <td>05-June-2002</td>
                        <td>1000</td>
                        <td>Credit</std>
                        <td>Alexa Purchase</td>
                    </tr>
                </table>
            </div>
        </center>
        </div>
    </section>

    <script src="script.js">
    </script>
    <?php include_once 'Support/footer.php';?>
</body>
</html>
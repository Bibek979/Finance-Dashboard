<?php
session_start();
if(!(isset($_SESSION['loggedInUser']))){
    header("Location: signup.php");
}
$wish = "Good Morning, ";
$hour = date('H');
if($hour>01 && $hour<12){
    $wish = "Good Morning, ";
}
else if($hour>12 && $hour<15) {
    $wish = "Good Afternoon, ";
}
else if($hour>15 && $hour<22) {
    $wish = "Good Evening, ";
}
else {
    $wish = "Good Night, ";
}

if(isset($_POST['updatesavingsbtn']))
{
    echo "Updated Savings";
    echo "<script type=\"text/javascript\">
    console.log(\"This should be working\");
    </script>";
}
if(isset($_POST['updateexpensebtn']))
{
    echo "Updated Savings";
    echo "<script type=\"text/javascript\">
    console.log(\"This should be working\");
    </script>";
}
// if(array_key_exists('updateexpensebtn', $_POST)){
//     echo "Updated Expenses";
//     echo "<script type=\"text/javascript\">
//     alert(\"This should be working\");
//     </script>";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Dashboard</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="./Support/GoogleCharts.js"></script>
    <script src="./Support/modalScript.js"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://192.168.1.10/PHP-Dashboard/Support/style.css">
</head>
<body>
    <?php include_once 'Support/header.php';
    include_once 'Support/modal.php';?>
    <section class="dashboard">
        <div>
            <?php
                $user = $_SESSION['loggedInUser'];
                echo "<h5 class=\"wishing\" style=\"font-weight: bold\">$wish $user</h5>";
            ?>            
            <div class="DashboardSideButtons">
            <img src="./Resources/savings2.png" alt="PlusICon">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateSavings">
                Savings
            </button>
            <img src="./Resources/expenses2.png" alt="MinusIcon" srcset="">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateExpenses">
                Expenses
            </button>
            </div>
        </div>
        <div>
            <div class="smallCards">
                <!-- LM stands for Last Month -->
                <div class="LMExpenseCard">
                    <h6>Last Month Total Expense</h6>
                    <?php
                        include 'Support/connection.php';
                        $uid = $_SESSION['loggedInUserID'];
                        $expense = 0;
                        $query = "SELECT amount FROM savings_expense_table WHERE uid_no='$uid' AND payment_type=1";
                        $result = mysqli_query($con, $query);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result)) {
                                $expense = $expense + $row['amount'];
                            }
                        }
                        $savings = 0;
                        $query = "SELECT amount FROM savings_expense_table WHERE uid_no='$uid' AND payment_type=0";
                        $result = mysqli_query($con, $query);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result)) {
                                $savings = $savings + $row['amount'];
                            }
                        }
                        echo "
                        <h5>&#x20B9;$expense</h5>
                        </div>
                        <div class=\"LMSavingsCard\">
                            <h6>Last Month Total Savings</h6>
                            <h5>&#x20B9;$savings</h5>
                        </div>
                        <div class=\"TargetRemaining\">
                            <h6>Target Remaining</h6>
                            <h5>&#x20B9;5000</h5>
                        </div>
                        ";
                    ?>
            </div>

            <div class="cards" id="cards">
                <div class="savingsCard" id="savingsCard">
                </div>
                <div class="expenseCard" id="expenseCard">
                </div>
                <div class="goalCard" id="goalCard">
                </div>
            </div>
            <div class="graphs" id="graphs">
                <div class="transactionSection">
                <h3>Recent Transactions</h3>
                <table style="text-align: center;">
                    <tr>
                        <th>Date</th>
                        <th>Amount ( in &#8377;)</th>
                        <th>Debit/Credit</th>
                        <th>Reason</th>    
                    </tr>

                    <?php
                    include_once 'Support/connection.php';
                    $currUser = $_SESSION['loggedInUserID'];
                    $query = "select date, amount,payment_type, Reason from savings_expense_table WHERE uid_no = '$currUser'";
                    $result = mysqli_query($con, $query);
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $tempcreditconv = "specify";
                            $paymentype = $row['payment_type'];
                            if($paymentype == 01){
                                $tempcreditconv = "Debited";
                            }
                            else {
                                $tempcreditconv = "Credited";
                            }
                            echo "<tr>
                            <td>" . $row['date'] . "</td>
                            <td>" . $row['amount'] . "</td>
                            <td>" . $tempcreditconv . "</td>
                            <td>" . $row['Reason'] . "</td>
                        </tr>";
                        }
                    }
                    
                    ?>
                </table>
            </div>
        </div class="transactionSection">
        </div>
    </section>

    <?php include_once 'Support/footer.php';?>
    <script src="script.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
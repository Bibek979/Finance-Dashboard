
<div class="topbar">
    <div class="icon sideIndent">
        <img src="./Resources/topbarIcon.png" 
        height="50px" alt="Finance Dashboard" srcset=""><span id="financeDashboard">Finance Dashboard</span>
    </div>
    <div class="navbar sideIndent">
        <a class="navbarItem home" href="/PHP-Dashboard">Home</a>
        <?php

            if(!isset($_SESSION)){
                session_start();
                echo "<a class=\"navbarItem features\">Features</a>";
                echo "<a class=\"navbarItem sign\" href=\"contact.php\">Contact</a>";
                echo "<a class=\"navbarItem sign\" href=\"signup.php\">Sign in</a>";
            }
            else {
                if(isset($_SESSION['loggedInUser'])){
                    echo "<a class=\"navbarItem sign\" href=\"dashboard.php\">Dashboard</a>";
                    echo "<a class=\"navbarItem contact\" href=\"#\">Settings</a>";
                    echo "<a class=\"navbarItem contact\" href=\"Support/logout.php\">Log Out</a>";
                }
                else {
                    echo "<a class=\"navbarItem features\" href=\"#features\">Features</a>";
                    echo "<a class=\"navbarItem sign\" href=\"contact.php\">Contact</a>";
                    echo "<a class=\"navbarItem sign\" href=\"signup.php\">Sign in</a>";
                }
            }
        ?>
    </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Dashboard with PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Support/style.css">
    <script src="Support/script.js"></script>
</head>
<body>
    <?php 
    session_start();
    include_once 'Support/header.php';?>

    <section class="heroSection">
        <div class="heroHeading">
            <h1>Ultimate Finance Dashboard</h1>
            <p class="heroHeading">
                Where all the professionals meet to use this tool.<br>
                Our tool is the number one ranked in the internet. 
            </p>
            <button>Explore !</button>
        </div>
        <img src="./Resources/heroImage.jpg" alt="Hero Image" 
        height=250px srcset="">
    </section>

    <section class="benefitSlider">
        <div style="display: hidden;">
            <h2>Save More With This Tool !</h2>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, ea.
        </p> 
        </div>
        <img src="./Resources/slider12.jpg" alt="" srcset="">
    </section>

    <section class="features" id="features">
        <div class="featuresHeader">
            <h4 class="sideIndent featuresText">Features of Finance Dashboard</h4>
            <img class="sideIndent" src="./Resources/features.png" alt="" srcset="">
        </div>
        <div class="sideIndent">
            <div class="featuresCard fC1 padding">
                <img src="./Resources/bestInClass.jpg" alt="Always the Best in Class" srcset="" height="150em">
                <div>
                    <h4>Always the Best-in Class</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, tenetur.</p>
                </div>
            </div>
            <div class="featuresCard fC2 padding">
                <img src="./Resources/supportAvlbl.jpg" alt="Always the Best in Class" srcset="" height="150em">
                <div>
                    <h4>Customer Support 24/7</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, tenetur. Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include_once 'Support/footer.php';?>
</body>
</html>
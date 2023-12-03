<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logos/logowhitebg.png">
    <link rel="stylesheet" href="menu.css">
    <script src="https://kit.fontawesome.com/ae60d6c6cb.js" crossorigin="anonymous"></script>
    
    <title>Feedback</title>

    <style>
        .icons {
            width: 40px;
            height: 40px;
            border: 0;
        }

        .fbBody {
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<body class="fbBody">
    <nav class="sidebar">
        <ul>
            <a href="../home.html" target="_top"><li class="first">
                <div class="home-icon">
                    <img src="../icons/home.png" alt="" class="icons">
                    <!-- <div class="roof">
                        <div class="roof-edge"></div>
                    </div>
                    <div class="front"></div> -->
                </div>
            </li></a>
            <a href="../infoWindow.html" target="_top"><li class="second">
                <div class="details-icon">
                    <img src="../icons/info.png" alt="" class="icons">

                <!-- <div class="paper"></div>
                <div class="lines"></div>
                <div class="lines"></div>
                <div class="lines"></div> -->
                </div>
            </li></a>
            <a href="../explore.html" target="_top"><li class="third">
                <div class="explore-icon">
                <!-- <i class="fa-regular fa-compass fa-2x icon"></i> -->
                    <img src="../icons/compass.png" alt="" class="icons">
                </div>
            </li></a>
            <a href="../menuFiles/aboutUs.html" target="_top"><li class="fourth">
                <div class="about-icon">
                    <img src="../icons/aboutUs.png" alt="" class="icons">
                </div>
            </li></a>
            <a href="../menuFiles/credits.html" target="_top"><li class="fifth">
                <div class="about-icon">
                    <!-- <i class="fa-solid fa-copyright fa-2x icon"></i> -->
                    <img src="../icons/copyright.png" alt="" class="icons">
                </div>
            </li></a>
            <a href="../menuFiles/feedback.php" target="_top"><li class="sixth">
                <div class="feedback" style="height: 95px;">
                    <img src="../icons/feedback.png" alt="" class="icons">
                    <!-- <i class="fa-solid fa-comment fa-2x icon"></i> -->
                </div>
            </li></a>
            </ul>
        </nav>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" method="post">

    <p class="title">FEEDBACK</p>
    <hr class="white">

    <p class="instruc">Please write your feedback below</p>

    <p class="rate">How do you rate your overall experience?</p>

    <div class="rateSection">
        <label for="veryBad" class="rateOptions"><input type="radio" name="radioRate" id="veryBad" value="1">Very Bad</label>
        <label for="bad" class="rateOptions"><input type="radio" name="radioRate" id="bad" value="2">Bad</label>
        <label for="good" class="rateOptions"><input type="radio" name="radioRate" id="good" value="3">Good</label>
        <label for="veryGood" class="rateOptions"><input type="radio" name="radioRate" id="veryGood" value="4">Very Good</label>
    </div>
    
    <label for="fname" class="name">Name:</label><br>
    <input type="text" name="fname"><br><br>
    <label for="thoughts" class="thoughts">Thoughts:</label><br>
    <textarea name="thoughts" id="thoughts" cols="55" rows="10" style="resize: none;"></textarea>
    <input type="submit" name="submit" value="Submit" class="submit">
    </form>
    
    <!-- <a href="../home.html" target="_top"><button type="button" class="home" id="home2"></button></a> -->

</body>
</html>

<?php 
    include("db.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        $rate = $_POST['radioRate'];
        $thoughts = $_POST['thoughts'];

        if (empty($thoughts)) {
            echo "Magbigay ka badi";
        } elseif (empty($rate)) {
            echo "Pipindut ka lang oh";
        } else {
            $sql = "INSERT INTO feedback (name, rating, thoughts) VALUES ('$name', '$rate', '$thoughts')";
    
            try {
                mysqli_query($conn, $sql);
                echo "Salamatss";
            } catch (mysqli_sql_exception $e) {
                echo "Failed: " . $e->getMessage();
            }
        }
    }

    mysqli_close($conn);
?>

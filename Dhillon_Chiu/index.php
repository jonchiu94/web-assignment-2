<?php session_start();
$login = $_COOKIE['login'];
$false = "false";
if (!isset($_COOKIE['login'])) {
    setcookie('login', 'false');
}
if (strcmp($login, $false) == 0){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Math Game</title>
        <link rel="stylesheet" href="styles/mathGame.css" type="text/css" />
        <link rel="stylesheet" href="styles/bootstrap.min.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
    </head>
    <body>
        <div class="top"></div>
        <div class="main">
            <header>
                <h1>Math Game</h1>
                <a href="logout.php" class="btn btn-default btn-sm">Logout</a>
            </header>

            <?php
            $sign = array('+', '-');
            $num1 = (rand(0, 50));
            $num2 = (rand(0, 50)); 
            $num3 = (rand(0,1));
            echo $num1;
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            echo $sign[$num3];
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            echo $num2;
            $_SESSION["number1"] = "$num1";
            $_SESSION["number2"] = $num2;
            $_SESSION["number3"] = $num3;
            $_SESSION["operator"] = $sign[$num3];
            ?>
            <form action="calculator.php" method="post">
                <input type="text" name="answer" placeholder="Enter answer">
                <input type="submit" class="btn btn-primary btn-sm">
            </form>
            <div>
                <p style="color: red;text-align: center">
                <?php
                    if(isset($_GET["error"])) {
                        echo$_GET["error"];
                    }

                    if(isset($_GET["error1"])) {
                        echo $_GET["error1"];
                    }

                    if(isset($_GET["error2"])) {
                        echo $_GET["error2"];
                    }

                ?>
                    <p style="color: green;text-align: center">
                <?php
                    if(isset($_GET["error4"])) {
                        echo $_GET["error4"];
                    }
                ?>
                </p>
            </div>
            <p>
                <?php
                    echo "Score: " . $_SESSION["right"] . " / " . $_SESSION["count"];
                ?>
            </p>
        </div>
    </body>
</html>

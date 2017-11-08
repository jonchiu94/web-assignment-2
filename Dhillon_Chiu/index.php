<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Math Game</title>
        <link rel="stylesheet" href="mathGame.css" type="text/css" />
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
    </head>
    <body style="margin: auto">
        
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
    
    if(isset($_GET["error4"])) {
        echo $_GET["error4"];
    }
?>
</p>
        <p>
            <?php
                echo "Score:" . $_SESSION["right"] . "/" . $_SESSION["count"];
            ?>
        </p>
    </body>
</html>

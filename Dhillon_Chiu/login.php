<?php session_start();?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Math Game</title>
    <link rel="stylesheet" href="mathGame.css" type="text/css" />
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
</head>
<body>
    <form action="authenticate.php" method="post" role="form" class="form-horizontal">
        <div class ="container">
            <div><h1>Please login to enjoy our math game.</h1></div>
        </div>
        <div>Email:</div>
        <div><input type="email" class="form-control" id="email" name="email" placeholder="Email" size="6">
        </div>
        <div>Password:</div>
        <div>
            <input type="text" class="form-control" id="password" name="password" placeholder="Password" size="6">
        </div>
        <br />
        <div><button type="submit" class="btn btn-primary">Login</button></div>
    </form>
    <p style="color: red;text-align: center">
        <?php
            if(isset($_GET["error5"])) {
                echo $_GET["error5"];
            }
        ?>
    </p>
</body>
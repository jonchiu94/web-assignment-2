<?php
    session_start();
    $email = $_POST["email"];
    $password = $_POST["password"];
    $credentials = file("credentials.config");
    for ($i=0; $i<count($credentials); ++$i){
        $login = explode(", ", $credentials[$i]);
        if (strcmp($email,$login[0])== 0){
            if (strcmp($email,$login[1] == 0)){
                setcookie("login","true");
                header("Location: index.php");
                die();    
             }
        }
    }
    header("Location: login.php?error5=Invalid login credentials.")
?>

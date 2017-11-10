<?php session_start(); ?>
<?php
    extract($_POST);

    switch ($_SESSION['number3'] ) {
        case 0:
            $finalAnswer = $_SESSION['number1'] + $_SESSION['number2'];
            break;
        case 1:
            $finalAnswer = $_SESSION['number1'] - $_SESSION['number2'];
            break;
        default:
            echo no;
            break;
    }

    $_SESSION["finAns"] = "$finalAnswer";
    $_SESSION["count"];
    if ($_SESSION["count"] == 0) {
            $_SESSION["count"] = 0;
    }

    $_SESSION["right"];
    if ($_SESSION["right"] == 0) {
        $_SESSION["right"] = 0;
    }

    if (!is_numeric($answer)) {
        header("Location: index.php?error=Enter a number for your answer");
    }

    if (empty($answer)) {
        header("Location: index.php?error1=Enter a number for your answer");
    }   

    if (is_numeric($answer)) {
        if ($answer != $finalAnswer) {
            if ($_SESSION["number3"] == 0) {
                $_SESSION['operate'] = "%2B";
            } else {
                $_SESSION['operate'] = $_SESSION["operator"];
            }
        $_SESSION["count"]++;
        $error2 = "INCORRECT, ". $_SESSION["number1"] ." " . $_SESSION["operate"] . " " . $_SESSION["number2"] . " is " . $_SESSION["finAns"];
        header("Location: index.php?error2=$error2");
    }

    if ($answer == $finalAnswer) {
        $_SESSION["count"]++;
        $_SESSION["right"]++;
        header("Location: index.php?error4=CORRECT");
    }
}


  
?>

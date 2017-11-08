<?php
session_start();
setcookie('login', 'false');
session_destroy();
header("location: login.php");
?>
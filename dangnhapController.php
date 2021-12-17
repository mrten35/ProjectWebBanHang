<?php
    if (count($_POST) > 0) {
        $username = $_POST["txt_username"];
        $passwd = $_POST["txt_password"];
        if ($username == "lengan@gmail.com" && $passwd == "12345") {
           
            session_start();
            $_SESSION["txt_username"]=$username;
           
           header("Location: index.php");
           
        }
    }
?>


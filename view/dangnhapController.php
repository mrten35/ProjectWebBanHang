<?php
    if (count($_POST) > 0) {
        $username = $_POST["txt_username"];
        $passwd = $_POST["txt_password"];
        if ($username == "lengan@gmail.com" && $passwd == "12345") {
           
            session_start();
            $_SESSION["txt_username"]=$username;
            echo'<script>
            window.alert("Email hoặc mật khẩu không tồn tại! Đăng nhập thất bại");
            </script>';
           header("Location: index.php");
           
        }
    }
?>


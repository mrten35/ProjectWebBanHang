<?php 
$email = $_POST["txt_email"]; 
$regex = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
if ( preg_match( $regex, $email )){
    echo $email . " đăng ký thành công.";
    header("Location: dangnhap.php");
}else {
    echo $email . "Email không hợp lệ.";
    echo "<a href='dangky.php'>Vui lòng thử lại</a>";
}
?>

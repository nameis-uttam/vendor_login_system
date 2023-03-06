<?php
include "../connect.php";
session_start();

$token = "qwertyuiopasdfghkjlzmncbvx1234567890";
$token = str_shuffle($token);
$token = substr($token, 0,6);

$email = $_POST['email'];
$sql = "SELECT email FROM vendor_login_system WHERE email = '$email'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Email not found";
    exit();
}else{
    if(isset($_POST['token'])){
        $token = $_POST['token'];
    }
   $update = "UPDATE `vendor_login_system` SET `token` = '$token' WHERE `vendor_login_system`.`email` = '$email'";
        $result = mysqli_query($connect, $update);
        if ($result) {
            echo "<span class='success'>token is send successfully in your email</span>";
        }
}

?>
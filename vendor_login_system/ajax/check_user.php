<?php
include "../connect.php";
$email = mysqli_real_escape_string($connect,$_POST['email']);
$password = mysqli_real_escape_string($connect,$_POST['password']);

if ($email != "" && $password != ""){

    $query = "select count(*) as vendor_login_system from vendor_login_system where email='".$email."' and password='".$password."'";
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_array($result);

    $count = $row['vendor_login_system'];

    if($count > 0){
        $_SESSION['email'] = $email;
        echo 1;
    }else{
        echo 0;
    }

}
?>
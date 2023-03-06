<?php
include '../connect.php';

function test_input($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = array();
    $token = test_input(($_POST['token']));
    $email = test_input(($_POST['email']));
    $newpassword = test_input($_POST["newpassword"]);
    $confirmnewpassword = test_input($_POST["confirmnewpassword"]);
    if (empty($newpassword) && ($newpassword == $confirmnewpassword)) {   
        $error[] = "Please enter password";
    }else{
        if (strlen($_POST["newpassword"]) < '8') {
            $error[] = "Your Password Must Contain At Least 8 Characters!";
        } else if (!preg_match("#[0-9]+#", $newpassword)) {
            $error[] = "Your Password Must Contain At Least 1 Number!";
        } else if (!preg_match("#[A-Z]+#", $newpassword)) {
            $error[] = "Your Password Must Contain At Least 1 Capital Letter!";
        }
    } 
    $count = count($error);
}

if ($count > 0) {
    foreach ($error as $value) {
        echo $value . "<br>";
    }
} else {
    $sql = "SELECT * from vendor_login_system where email='$email'";
    $res = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_array($res)){
        $oldtoken = $row['token'];
        $oldemail = $row['email'];
    }
    $update = "UPDATE `vendor_login_system` SET `password` = '$newpassword' WHERE `vendor_login_system`.`token` = '$token' and `vendor_login_system`.`email` = '$email'";
    $result = mysqli_query($connect, $update);
    if ($token != '' && $email != '') {
        if($token == $oldtoken && $email == $oldemail){
            if($newpassword == $confirmnewpassword){
                $query = "UPDATE `vendor_login_system` SET `token` = NULL WHERE `vendor_login_system`.`email` = '$email'";
            $res = mysqli_query($connect, $query);
            echo "<span class='success'>Password Change Successfully</span>";
            }else {
                echo "Password doesn't match!";
            }
        }else{
            echo "Invalid Token and email";
        }
    }else{
        echo "Token and email not found";
    }
}

?>
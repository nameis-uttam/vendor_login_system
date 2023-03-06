<?php
include '../connect.php';

$email = $_SESSION['email'];

function test_input($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = array();
    $password = test_input($_POST['password']);
    $newpassword = test_input($_POST["newpassword"]);
    $confirmnewpassword = test_input($_POST["confirmnewpassword"]);
    if(empty($password)){
        $error[] = "Please enter the old password";
    }else if (empty($newpassword)) {   
        $error[] = "Please enter new password";
    }else if (empty($confirmnewpassword)){
        $error[] = "Please confirm your password";
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
}else{
    $sql = "SELECT password,email FROM vendor_login_system WHERE email='$email'";
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $oldpassword = $row['password'];
    }
    if($password == $oldpassword){
        if ($newpassword == $confirmnewpassword) {
            $sql = "UPDATE vendor_login_system set password='$newpassword' where email='$email'";
            $data = mysqli_query($connect, $sql);
            echo "<span class='success'>Congratulation You have successfully changed your password</span>";
        } else {
            echo "Confirm password doesn't match";
        }
    }else {
        echo "Old password doesn't match!";
    }
    
}
?>
<?php include "connect.php";?>
<!DOCTYPE html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <?php
    if ((isset($_SESSION['email']) != '')) {
        echo '<ul>
                    <li><a style="color:black;" class="active" href="home.php">Home</a></li>
                    <li><a style="color:black;" href="change_password.php">Change Password</a></li>
                    <li><a style="color:black;" href="update_form.php">Edit data</a></li>
                    <li class="nav navbar-nav navbar-right" ><a style="color:red;" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>';
    } else {
        echo '<ul>
                <li><a class="active" style="color:black;" href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="forgot_password.php">Forgot Password</a></li>
                <li><a href="new_password.php?token=&email=">Forgot/Change Password</a></li>
            </ul>';
    }
    ?>
</header>
<title>Login Page</title>
<?php 
include "header.php"; 
if(isset($_SESSION['email'])){
    header("location:home.php");
}
?>
<div class="container">
<form action="" method="post" id="loginUser">
    <table class="center2">
        <h2 class="text2"><u>Login Page</u></h2>
        <p id="msg" class="text"></p>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
    </table>
    <br><br>
    <input type="submit" id="submit" name="submit" value="Login">
    </form>
</div>
    <?php include "footer.php"; ?>

<title>new password</title>
<?php
include "header.php";
if (isset($_SESSION['email'])) {
    header("location:home.php");
}
?>
<div class="container">
    <form action="#" method="POST" id="newPassword">
    <h2 class="text"><u>New Password</u></h2>
        <p class="error" id="msg"></p>
        <table>
            <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
            <tr>
                <td>New Password:</td>
                <td><input type="password" name="newpassword" id="newpassword"></td>
            </tr>
            <tr>
                <td>Re-enter new password:</td>
                <td><input type="password" name="confirmnewpassword" id="confirmnewpassword"></td>
            </tr>
        </table>
        <br><br>
        <button>Submit</button>
</div>
<?php include "footer.php"; ?>
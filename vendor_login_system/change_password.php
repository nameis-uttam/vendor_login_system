<?php
include "header.php";
$email = $_SESSION['email'];
?>
<div class="container">
    <form id="change_password" method="post">
        <h2 class="text2"><u>Change Your Password</u></h2>
        <br>
        <p class="error" id="msg"></p>
        <table>
            <input type="hidden" name="email" id="email" value="<?php echo $email; ?>"></input>
            <tr>
                <td>Enter your password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Enter new password:</td>
                <td><input type="password" name="newpassword"></td>
            </tr>
            <tr>
                <td>Re-enter new password:</td>
                <td><input type="password" name="confirmnewpassword"></td>
            </tr>
        </table>
        <br><br>
        <button>Update Password</button>
    </form>
</div>
<?php include "footer.php"; ?>
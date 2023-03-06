<title>Document</title>
<?php 
include "header.php"; 
if (isset($_SESSION['email'])) {
    header("location:home.php");
}
?>
<div class="container">
    <form method="post" id="forgot">
        <h2 class="text"><u>Forgot Password</u></h2>
        <table>
            <p class="error" id="msg"></p>
            <tr>
                <td>Enter Email Id: </td>
                <td><input type="text" id="email" name="email"></td>
        </table>
        <br><br>
        <input type="submit" value="submit">
    </form>
    <script type="text/javascript" src="ajax-script.js"></script>
</div>
<?php include "footer.php" ?>
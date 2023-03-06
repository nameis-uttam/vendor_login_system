    <?php 
    include "header.php"; 
    if (!isset($_SESSION['email'])) {
        header("location:index.php");
    }  
    $email = $_SESSION['email'];
    $display = "select vendor_first_name,vendor_last_name,email from vendor_login_system where email ='" . $_SESSION['email'] . "'";
    if ($result = mysqli_query($connect, $display)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $vendor_first_name = $row['vendor_first_name'];
            $vendor_last_name = $row['vendor_last_name'];
            $email = $row['email'];
        }
    } else {
        mysqli_error($connect);
    }?>
    <form action="_blanck">
            <div class="container">
            <p id="msg"></p>
            <h1><u>Homepage</u></h1>

            <h1 class="text2">Welcome </h1>
            <h2 style="color:orangered"><?php echo "$vendor_first_name ", "$vendor_last_name"; ?></h2>
        </div>
    </form>
    <?php include "footer.php"; ?>
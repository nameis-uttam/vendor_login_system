<title>Update data</title>
<?php 
include "header.php"; 
if (!isset($_SESSION['email'])) {
    header("location:index.php");
}

$query = "SELECT * FROM vendor_login_system WHERE email='" . $_SESSION['email'] . "'";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $vendor_first_name = $row['vendor_first_name'];
    $vendor_last_name = $row['vendor_last_name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $address = $row['address'];
    $gender = $row['gender'];
    $hobbie = $row['hobbies'];
    $alldata = explode(",", $hobbie);
    $business = $row['business'];
    $salary = $row['salary'];
    $city = $row['city'];
    $state = $row['state'];
    $date_of_birth = $row['date_of_birth'];
}
?>
<form id="updateForm" method="POST" action="#">
    <div class="container">
        <h2><u class="text2">Update Data</u></h2>
        <p class="error" id="message"></p>
        <table>
            <tr>
                <td><input type="hidden" name="email" id="id" value="<?php echo $_SESSION['email']; ?>"></td>
            </tr>
            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
            <tr>
                <td>First Name</td>
                <td><input type="text" name="vendor_first_name" id="vendor_first_name" value="<?php echo $vendor_first_name; ?>"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="vendor_last_name" id="vendor_last_name" value="<?php echo $vendor_last_name; ?>"></td>
            </tr>
            <tr>
                <td>Email ID</td>
                <td><input type="text" name="email" id="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="mobile" name="mobile" id="mobile" value="<?php echo $mobile; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" cols="30" rows="4" id="address" value="<?php echo $address; ?>"><?php echo $address ?></textarea></td>
            </tr>
            <tr>
                <td>gender</td>
                <td>
                    <?php
                    $gender1 = array('male', 'female', 'other');
                    foreach ($gender1 as $value) { ?>
                        <input type='radio' name='gender' id='gender' value=<?php echo $value; ?> <?php if ($value == $gender) echo 'checked="checked"' ?>><?php echo $value;
                                                                                                                                                        } ?>
                </td>
            </tr>
            <tr>
                <td>Hobbies</td>
                <td>
                    <?php
                    $Hobbies = array('cricket', 'football', 'reading', 'singing');
                    foreach ($Hobbies as $Hobbi) { ?>
                        <input type='checkbox' name='hobbie[]' id="hobbies" value=<?php echo $Hobbi; ?> <?php if (in_array($Hobbi, $alldata)) echo 'checked="checked"' ?>><?php echo $Hobbi;
                                                                                                                                                                        } ?>
                </td>
            </tr>
            <tr>
                <td>Business</td>
                <td>
                    <input type="hidden" id="business_val_id" value="<?php echo $business ?>">
                    <select name="business" id="business">
                        <option value="" disabled selected>Select business</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="salary" id="salary" value="<?php echo $salary ?>"></td>
            </tr>
            <tr>
                <td>State</td>
                <td>
                    <input type="hidden" id="state_val_id" value="<?php echo $state ?>">
                    <select name="state" id="state">
                        <option value="" disabled selected>Select State</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td>
                    <input type="hidden" id="city_val_id" value="<?php echo $city ?>">
                    <select id="city" name="city">
                        <option value="" disabled selected>Select City</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date of birth</td>
                <td><input type="date" name="date_of_birth" value="<?php echo $date_of_birth ?>"></td>
            </tr>
        </table>
        </br>
        <button class="button pure-button" type="submit" name="update" id="update">Update</button>
    </div>
</form>
<?php include "footer.php"; ?>
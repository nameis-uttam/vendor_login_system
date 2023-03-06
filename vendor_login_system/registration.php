<title>User Registration Page</title>
<?php 
include "header.php"; 
if(isset($_SESSION['email'])){
    header("location:home.php");
}
?>
<div class="container">
<form id="userForm" method="POST" autocomplete="off">
    <h2 class="text2"><u>Vendor registration Page</u></h2>
    <p class="error" id="msg"></p>
        <table>
            <tr>
                <td>Vendor first Name</td>
                <td><input type="text" name="vendor_first_name" id="vendor_first_name"></td>
            </tr> 
            <tr>
                <td>Vendor last Name</td>
                <td><input type="text" name="vendor_last_name" id="vendor_last_name"></td>
            </tr>
            <tr>
                <td>Email ID</td>
                <td><input type="email" name="email" id="email"></td>
                <div id="exists"></div>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="mobile" name="mobile" id="mobile"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" col="30" rows="4" id="address"></textarea>
                </td>
            </tr>
            <tr>
                <td>gender</td>
                <td><input type="radio" name="gender" value="male" id="gender[]">Male
                    <input type="radio" name="gender" value="female" id="gender[]">Female
                    <input type="radio" name="gender" value="other" id="gender[]">Other
                </td>
            </tr>
            <tr>
                <td>Hobbies</td>
                <td><input type="checkbox" name="hobbie[]" value="cricket" id="hobbie1">Cricket
                    <input type="checkbox" name="hobbie[]" value="football" id="hobbie2">Football
                    <input type="checkbox" name="hobbie[]" value="reading" id="hobbie3">Reading
                    <input type="checkbox" name="hobbie[]" value="singing" id="hobbie4">Singing
                </td>
            </tr>
            <tr>
                <td>business</td>
                <td>
                    <select name="business" id="business">
                        <option value="" disabled selected>Select Business</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="salary" id="salary"></td>
            </tr>
            <tr>
                <td>State</td>
                <td>
                    <select name="state" id="state">
                        <option value="" disabled selected>Select state</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td>
                    <select id="city" name="city">
                        <option value="" disabled selected>Select City</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date of birth</td>
                <td><input type="date" name="date_of_birth" id="date_of_birth"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" id="password"></td>
            </tr>
        </table>
        </br>
        <button class="button pure-button" type="submit" name="submit" value="Submit">Submit</button>
    </form>
    </div>
    <?php include "footer.php"; ?>
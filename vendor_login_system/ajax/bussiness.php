<?php
include "../connect.php";

$query = "SELECT * FROM `business`";
$result = mysqli_query($connect,$query);
$dt = "";

while($row = mysqli_fetch_assoc($result)){
    $dt .= "<option value=".$row['id'].">".$row['business']."</option>";
}
echo $dt;

// echo "<pre>";
// print_r($row);
?>
<?php
include "../connect.php";
    $sql = "SELECT * FROM states";
    $query = mysqli_query($connect,$sql);
    $dt = "";
    while($row=mysqli_fetch_assoc($query)){
        $dt .= "<option value=".$row['id'].">".$row['state']."</option>";
    }

    echo $dt;

    ?>

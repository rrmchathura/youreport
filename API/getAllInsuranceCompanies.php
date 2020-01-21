<?php
session_start();
include_once "config.php";



$sql = "SELECT DISTINCT insuranceCompany  FROM `user`";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $insuranceCompanye=$row["insuranceCompany"];
        

     echo "<option value='$insuranceCompanye'>$insuranceCompanye<option>";
    }

} 
$conn->close();




?>
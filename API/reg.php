<?php
if ($_POST["role"]=="DRIVER"){
    $insuranceID=$_POST["insuranceID"];
    $insuranceCompany=$_POST["insuranceCompany"];
    $vehicleNo=$_POST["vehicleNo"];
}
else{
    $insuranceID="";
    $insuranceCompany="";
    $vehicleNo="";  
}
$name=$_POST["name"];
$role=$_POST["role"];
$nic=$_POST["nic"];
$contactNo=$_POST["contactNo"];
$email=$_POST["email"];
$pass=$_POST["Password"];
 
echo $role;
include "config.php";
$sql = "INSERT INTO `user`(`uId`, `name`, `role`, `nic`, `insuranceID`, `insuranceCompany`, `vehicleNo`, `contactNo`, `email`, `password`) 
                        VALUES ('','$name','$role','$nic','$insuranceID','$insuranceCompany','$vehicleNo','$contactNo','$email','$pass')";
//echo $sql;
if ($conn->query($sql) === TRUE) {
    $uniId = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $uniId;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//  header("Location: ../adminArea"); /* Redirect browser */
//  exit();
?>
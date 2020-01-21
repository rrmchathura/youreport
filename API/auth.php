<?php
session_start();
include_once "config.php";
$userName=$_REQUEST['email'];
$pass=$_REQUEST['password'];

if ($userName=="admin" && $pass="nimda")
{ 
    $_SESSION["name"] = "Admin";
    echo $_SESSION["name"];
    header("Location:../adminArea");
}

else{
include "config.php";
$sql = "SELECT * FROM `user` WHERE `email` = '$userName' AND `password` = '$pass'  ;";
$result = $conn->query($sql);

echo $sql;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $role=$row["role"];
        $name=$row["name"];
        echo $role;
        $id=$row["uId"];
        $_SESSION["name"] = $name;
         $_SESSION["id"] = $id;
         $_SESSION["role"] = $role;
         if ($role=="DRIVER") header("Location:../DriverArea");
         if ($role=="POLICE") header("Location:../policePanel");
         if ($role=="RDA") header("Location:../rdaPanel");
         if ($role=="INSURANCE") header("Location:../insurencePanel");
        exit;
        echo $name;
    }
} else {

    
}
}
$conn->close()

?>
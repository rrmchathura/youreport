<?php
session_start();
$uId=$_POST["cauIdseID"];


//$user=$_SESSION["id"] ;


include "config.php";
$sql = "DELETE FROM `user` WHERE `user`.`uId` =  $uId;";
echo $sql;
if ($conn->query($sql) === TRUE) {
   
    echo "1";
} else {
    echo "0";
    // echo "Error: " . $sql . "<br>" . $conn->error;
}

 
?>
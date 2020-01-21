<?php
session_start();
$caseID=$_POST["caseID"];
$status=$_POST["status"];
$flag=$_POST["flag"];


//$user=$_SESSION["id"] ;


include "config.php";
$sql = "UPDATE `accidentcase` SET `flag`= '$flag'  WHERE `accidentcase`.`caseId` = $caseID;";
echo $sql;
if ($conn->query($sql) === TRUE) {
   
    echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "UPDATE `accidentcase` SET `status` = '$status' WHERE `accidentcase`.`caseId` = $caseID;";
echo $sql;
if ($conn->query($sql) === TRUE) {
   
    echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:../policePanel"); 
exit;

 
?>
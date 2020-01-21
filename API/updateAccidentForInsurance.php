<?php
session_start();
$caseID=$_POST["caseID"];
$approvel=$_POST["approvel"];



//$user=$_SESSION["id"] ;


include "config.php";
$sql = "UPDATE `accidentcase` SET `approvel`= '$approvel'  WHERE `accidentcase`.`caseId` = $caseID;";
echo $sql;
if ($conn->query($sql) === TRUE) {
   
    echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "SELECT `email` FROM `user`, `accidentcase` WHERE accidentcase.user=user.uId AND accidentcase.caseId=$caseID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $email= $row["email"];
       $to =  $email;
        $subject = "YouReport";
        $txt = "Your Insurance Request Has $approvel";
        $headers = "From: info@youreport.com" . "\r\n";

        mail($to,$subject,$txt,$headers);
    }
} else {
    echo "0 results";
}



header("Location:../insurencePanel"); 
exit;

 
?>
<?php

include_once "config.php";

$myArr = array();


$sql = "SELECT * FROM `accidentcase` WHERE `status`='NOT_SLOVED'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $caseId=$row["caseId"];
        $timeStamp=$row["timeStamp"];
        $type=$row["type"];
        $vehicleType=$row["vehicleType"];
        $vehicleNumber=$row["vehicleNumber"];
        $user=$row["user"];
        $lang=$row["lang"];
        $lat=$row["lat"];
        $status=$row["status"];
        $flag=$row["flag"];
        $approvel=$row["approvel"];



        echo "
        <tr>
        <td style='padding:10px'>$caseId</td>
        
        <td style='padding:10px'>$vehicleNumber</td>
        <td style='padding:10px'>$status</td>
        <td style='padding:10px'>$approvel</td>
        <td style='padding:10px'><a href='../API/deleteCase.php?caseId=$caseId'><button type='button' class='btn btn-danger'>Delete</button></a></td>
      </tr>";

}
} 
$conn->close();


?>
<?php
session_start();
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
        $flag=$row["flag"];



        echo "<tr>
        <td style='width: 30%;'><img style=' border: 1px solid #ddd;border-radius: 4px;padding: 5px;width: 100px;' src='../uploads/1/$caseId.jpg'></td>
        <td style='width: 70%;'><h4>$timeStamp at $type</h4> <button onclick=\"moreInfoWindow($caseId)\">View Case </button > </td>
        
      </tr>";

}
} 
$conn->close();


?>
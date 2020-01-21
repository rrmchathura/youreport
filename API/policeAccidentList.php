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

        $data=[$caseId,$lang,$lat,$type,$timeStamp,$vehicleType,$vehicleNumber,$user,$status,$flag];

       
      // $data="[".$caseId.",".$timeStamp.",".$type.",".$vehicleType.",".$vehicleNumber.",".$user.",".$lang.",".$lat.",".$status.",".$flag."]";
       array_push($myArr,$data);
    }

} 
$conn->close();






$myJSON = json_encode($myArr);
//  [
//   ['loan 1', 33.890542, 151.274856, 'address 1'],
//   ['loan 2', 33.923036, 151.259052, 'address 2'],
//   ['loan 3', 60.028249, 151.157507, 'address 3'],
//   ['loan 4', 33.80010128657071, 151.28747820854187, 'address 4'],
//   ['loan 5', 33.950198, 151.259302, 'address 5']
//   ] 

echo $myJSON;
?>
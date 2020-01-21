<?php

include_once "config.php";

$myArr = array();


$sql = "SELECT * FROM `user` WHERE `role`='DRIVER'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $uId=$row["uId"];
        $name=$row["name"];
        $password=$row["password"];
        $insuranceID=$row["insuranceID"];
        $insuranceCompany=$row["insuranceCompany"];
        $role=$row["role"];
        
        $status=$row["status"];
  
        echo "<tr>
        <td> $uId</td>
        <td> $name</td>
        <td> $password</td>
        <td> $insuranceID</td>
        <td> $insuranceCompany</td>
        <td> $role</td>
        <td> $status</td>


        <td  ><button style='padding:8px;' class='btn btn-success' onclick=\"updateUser($uId,'Active')\">Active</button > </td>
        <td ><button style='padding:8px;' class='btn btn-warning'  onclick=\"updateUser($uId,'Deactive')\">Deactive</button > </td>
        <td ><button style='padding:8px;' class='btn btn-danger'  onclick=\"deleteUser($uId)\"> Delete </button > </td>

      </tr>";

}
} 
$conn->close();


?>
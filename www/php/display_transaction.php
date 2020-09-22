<?php
require_once "connect.php";

$data=array();

$Jeepney_Driver = $_GET['Jeepney_Driver'];

$q= $conn->query("SELECT * FROM jeepneys WHERE Jeepney_Driver = '$Jeepney_Driver'");

while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
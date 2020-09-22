<?php
require_once "connect.php";

$data=array();


$q= $conn->query("SELECT * FROM jeepney_transaction ");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
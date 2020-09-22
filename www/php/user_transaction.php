<?php
require_once "connect.php";

$data=array();

$username = $_GET['username'];

$q= $conn->query("SELECT * FROM jeepney_transaction WHERE username = '$username' ");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
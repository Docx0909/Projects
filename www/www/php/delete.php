<?php
	header("Access-Control-Allow-Origin: *");

 include "connect.php";

 if(!empty($_GET['Jtrans_ID']))
 {
    $Jtrans_ID = $_GET['Jtrans_ID'];

 $q_login = $conn->query("DELETE FROM jeepney_transaction WHERE Jtrans_ID='$Jtrans_ID'") or die (mysqli_error());

 if($q_login){
    echo "success";


}else
    echo "error";
}
 ?>
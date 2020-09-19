<?php
 require_once "connect.php";
 
 if(isset($_POST['update']))
 {
 $Jeepney_ID    =$_POST['Jeepney_ID'];
 $Jeepney_Color =$_POST['Jeepney_Color'];
 $Jeepney_Route  =$_POST['Jeepney_Route'];
 $Jeepney_Body_No=$_POST['Jeepney_Body_No'];
 
 var Jeepney_Color = field.Jeepney_Color;
 var Jeepney_Route = field.Jeepney_Route;
 var Jeepney_Body_No = field.Jeepney_Body_No;
 
 $q_login =$conn->query("UPDATE jeepneys VALUES($Jeepney_Color','$Jeepney_Route', '$Jeepney_Body_No) WHERE Jeepney_ID = '$Jeepney_ID' ");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
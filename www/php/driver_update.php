<?php
 require_once "connect.php";
 
 if(!empty($_POST['Total']))
 {
 $Jeepney_Body_No =$_POST['Jeepney_Body_No'];
 $Jeepney_Remaining_Seat = $_POST['Total'];

       $q_login = $conn->query("UPDATE jeepneys SET Jeepney_Available_Seat = '$Jeepney_Remaining_Seat' WHERE Jeepney_Body_No = '$Jeepney_Body_No' ") or die (mysqli_error());

                if($q_login)
                    echo "success";
            
            
                }else
                    echo "error";
        
	

 ?>
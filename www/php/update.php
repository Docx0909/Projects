<?php
 require_once "connect.php";
 
 if(!empty($_POST['username']))
 {
 $username =$_POST['username'];
 $Jeepney_Driver =$_POST['Jeepney_Driver'];
 $Jeepney_ID    =$_POST['id'];
 $Jeepney_Color =$_POST['Jeepney_Color'];
 $Jeepney_Route  =$_POST['Jeepney_Route'];
 $Jeepney_Capacity  =$_POST['Jeepney_Capacity'];
 $Jeepney_Body_No=$_POST['Jeepney_Body_No'];
 $Jeepney_Available_Seat=$_POST['result'];
 $Jeepney_Seat_Reserve = $_POST['Jeepney_Seat_Reserve'];
 $Jeepney_Fair = $_POST['Jeepney_Fair'];
 date_default_timezone_set("Asia/Manila");
 $date = date('Y/m/d H:i:s');

       $q_login = $conn->query("UPDATE jeepneys SET  Jeepney_Available_Seat = '$Jeepney_Available_Seat' WHERE Jeepney_ID = '$Jeepney_ID' ") or die (mysqli_error());


        if(!empty($_POST['username']))
                {
                
        
  

                $q_login = $conn->query("INSERT INTO jeepney_transaction VALUES('','$username', '$Jeepney_Driver','$Jeepney_Fair','$Jeepney_Route', '$Jeepney_Body_No', '$Jeepney_Capacity', '$Jeepney_Seat_Reserve', '$date') ");
            
                if($q_login){
                    echo "success";
            
            
                }else
                    echo "error";
                }
            }
                

        // 


       

        // if(!empty($_POST['username']))
        // {
		// 	$data= $conn->query("INSERT INTO jeepney_transaction VALUES('','$username','$Jeepney_Route', '$Jeepney_Body_No', '$Jeepney_Capacity', '$Jeepney_Available_Seat' )") or die (mysqli_error());
        //     if($data)
        //     echo "success";
        //     else
        //     echo "error";
        //     }
	

 ?>
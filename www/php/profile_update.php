<?php
 require_once "connect.php";
 
 if(!empty($_POST['id']))
 {
    
 $userid =$_POST['id'];
 $usertype =$_POST['usertype'];
 $fullname =$_POST['fullname'];
 $contactnumber = $_POST['contactnumber'];
 $username = $_POST['username'];
 $password =$_POST['password'];
 $gender =$_POST['gender'];
 $age =$_POST['age'];
 

       $q_login = 
       
       $conn->query("UPDATE users SET fullname = '$fullname', contactnumber = '$contactnumber', gender = '$gender', age = '$age', username = '$username', password = '$password' WHERE user_id = '$userid' ") or die (mysqli_error());

                if($q_login)
                    echo "success";
            
            
                }else
                    echo "error";
        
	

 ?>
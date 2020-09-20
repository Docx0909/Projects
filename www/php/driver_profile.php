<?php
	header("Access-Control-Allow-Origin: *");

    require_once 'connect.php';
 

    if(isset($_GET['username'])){
        
        $username = $_GET['username'];
  
        $q_profile  = $conn->query("SELECT * FROM users WHERE username= '$username'") or die (mysqli_error());
        $f_profile = $q_profile->fetch_array();
        $v_profile = $q_profile->num_rows;
        if($v_profile == 0){
            die 'Username could not be found';
            exit();
        } while( $row = fetch_array(mysql_fetch_assoc($v_profile))){
            $usertype = $row['usertype'];
            $fullname = $row['fullname'];
            $contact = $row['contact'];
            $username = $row['username'];
        }


    }
    
    

?>
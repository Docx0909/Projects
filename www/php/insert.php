<?php
	
		header("Access-Control-Allow-Origin: *");
	
		require_once 'connect.php';
		session_start();
	
		if(isset($_POST['usertype']))
		{
			$usertype =$conn->real_escape_string($_POST['usertype']);
			$username =$conn->real_escape_string($_POST['username']);
			$fullname = $conn->real_escape_string($_POST['fullname']);
			$password =  $conn->real_escape_string($_POST['password']);
			$contactnumber =  $conn->real_escape_string($_POST['ContactNumber']);
	
		   
	
			$data = $conn->query("SELECT * FROM users WHERE username= '$username'") or die (mysqli_error());
			$data = $data->num_rows;
			if($data == 1){
				exit("username with this already exists!");
			}else{
				$conn->query("INSERT INTO users VALUES('', '$usertype','$fullname', '$contactnumber', '$username', '$password')");
				echo 'success';
			}
		} 
	
?>
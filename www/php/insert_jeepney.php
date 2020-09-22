<?php


		require_once 'connect.php';
        

        if(!empty($_POST['Jeepney_Color']))
		{
		$Jeepney_Driver =    $conn->real_escape_string($_POST['username']);
        $Jeepney_Color =    $conn->real_escape_string($_POST['Jeepney_Color']);
        $Jeepney_Route =    $conn->real_escape_string($_POST['Jeepney_Route']);
		$Jeepney_Body_No = $conn->real_escape_string($_POST['Jeepney_Body_No']);
		$Jeepney_Capacity = $conn->real_escape_string($_POST['Jeepney_Capacity']);
		$Jeepney_Available_Seat = $conn->real_escape_string($_POST['Jeepney_Capacity']);

	
			$data = $conn->query("SELECT * FROM jeepneys WHERE Jeepney_Body_No = '$Jeepney_Body_No'") or die (mysqli_error());
			$data = $data->num_rows;
			if($data == 1){
				exit("jeep body number with this already exists!");
			}else{
				$conn->query("INSERT INTO jeepneys VALUES('','$Jeepney_Driver','$Jeepney_Color','$Jeepney_Route', '$Jeepney_Body_No', '$Jeepney_Capacity', '$Jeepney_Available_Seat')");
				echo 'Successfully Recorded!';
			}
		} 
	
?>
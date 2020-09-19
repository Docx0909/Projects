<?php 
	header("Access-Control-Allow-Origin: *");
   	include 'connect.php';
	
    
    session_start();
    unset($_SESSION["id"]);
     echo 'success';
    // header("Location: http://localhost/tsuper/www/login.html");
?>
<?php 

        require_once 'connect.php';

        if(!empty($_POST['username']) && !empty($_POST['password']))
        {

        $username = $_POST['username'];
        $password = $_POST['password'];


        $q_login  = $conn->query("SELECT * FROM users WHERE username= '$username' AND password='$password' AND usertype='Commuter'") or die (mysqli_error());
        $f_login = $q_login->fetch_array();
        $v_login = $q_login->num_rows;
        if($v_login > 0){
            echo 'success';
            exit();
        } 
    }
?>
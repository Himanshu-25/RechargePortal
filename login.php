<?php

    session_start();

    $con = mysqli_connect('localhost','harshit','Mysql!2345');
	

    mysqli_select_db($con, 'easyrecharge');

    $username = $_POST['username'];
    
    $password = $_POST['password'];

    $_SESSION['username']=$username;

    $q = " select * from registration where username = '$username' && password ='$password' ";

    $result = mysqli_query($con,$q);

    $row = mysqli_num_rows($result);

    if($row == 1){
        header('location:home.php');	
    }
    else{
        header('location:index.html');
    }

?>

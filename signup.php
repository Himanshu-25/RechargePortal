<?php
    session_start();
    header('location: index.html#login');

    $con = mysqli_connect('localhost','harshit','Mysql!2345');

    mysqli_select_db($con, 'easyrecharge');

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $s = "SELECT * from registration where username = '$username'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo '<script>alert("Username Already Taken")</script>';
    }
    else{
        $reg = mysqli_query($con," insert into registration (name, username, email, password) values ('$name','$username','$email','$password')");
        echo '<script>alert("Registration Successfully")</script>';
    }
?>

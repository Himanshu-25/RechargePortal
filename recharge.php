<?php
    session_start();
  $con = mysqli_connect('localhost','harshit','Mysql!2345');
  
    mysqli_select_db($con, 'easyrecharge');


if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
   // $username = $_POST['username'];
    $username = $_SESSION['username'];
    $phone = $_POST['phone'];
    $operator = $_POST['operator'];
    $circle = $_POST['circle'];
	$sql = "SELECT name,username FROM registration WHERE username='$username'";
	$result = $con -> query($sql);


	// Associative array
	$row = $result -> fetch_array(MYSQLI_ASSOC);
	printf ("%s (%s)\n", $row["name"], $row["username"]);
	// Free result set
	$na=$row['name'];
	$us=$row['username'];
	echo $na."-".$us."  ".$phone."  ".$operator."  ".$circle;

$sql="INSERT INTO recharge (name,username,phone,operator,circle) VALUES ('$na', '$us','$phone','$operator','$circle')";
 
if (mysqli_query($con, $sql)) {

  	//echo "New record created successfully";
       header('location:plans.html');   
} 
//       $result = mysqli_query($con,"update recharge set phone='$phone', operator='$operator', circle='$circle' where username = '$username'") or die("failed to query database".mysqli_error());
//    ,phone,operator,circle) values ($username,$phone,$operator,$circle)
?>

<?php
	session_start();	

	include('../model/ketnoimysql.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['userType'];

	$_SESSION['userType'] = $_POST['userType'];
	echo $username ;
	echo $password ;
	echo $role ;
	$connect = mysqli_connect("localhost", "root", "", "nhakhoa");
	//$query = "SELECT * FROM users";

	$query = "SELECT username, password, user_type FROM users WHERE user_type = '$role' and username = '$username' and password = '$password' ";
	$result = mysqli_query($connect, $query);

	
	if((mysqli_num_rows($result) == 1)) {
		header("Location: http://localhost/new/view/".$role.".php");
		echo "1";
		die();
	}else{
		header("Location: http://localhost/new/Login.php");
		echo "0";
		die();
	}
		


	




	// if($a == 3){		
	// 	header("Location: http://localhost/new/Login.php");
	// 	die();
	// }else{
	// 	header("Location: http://localhost/new/test2.php");
	// }




?>
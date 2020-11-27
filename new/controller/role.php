<?php
	session_start();	

	include('../model/ketnoimysql.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	// $role = $_POST['userType'];

	// $_SESSION['userType'] = $_POST['userType'];
	// echo $username ;
	// echo $password ;
	// echo $role ;
	$connect = mysqli_connect("localhost", "root", "", "nhakhoa");
	//$query = "SELECT * FROM users";

	$query = "SELECT username, password, user_type FROM users WHERE  username = '$username' and password = '$password' ";
	$data = mysqli_query($connect, $query);
	$arraydata = array();

	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['username'], $row['password'],$row['user_type']));

	}
	//print_r($arraydata);

	// echo $arraydata[0]->user_type;
	$_SESSION['userType'] = $arraydata[0]->user_type;
	 echo $_SESSION['userType'];

	
	if((mysqli_num_rows($data) == 1)) {
		header("Location: http://localhost/new/view/".$_SESSION['userType'].".php");
		echo "1";
		die();
	}else{
		header("Location: http://localhost/new/Login.php");
		echo "0";
		die();
	}
		


	class Lists
	{
		function __construct( $username, $password,$user_type)
		{
			

			$this->username = $username;
			$this->password = $password;
			$this->user_type = $user_type;
			
	}}




	// if($a == 3){		
	// 	header("Location: http://localhost/new/Login.php");
	// 	die();
	// }else{
	// 	header("Location: http://localhost/new/test2.php");
	// }




?>
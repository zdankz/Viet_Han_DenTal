<?php 
	session_start();
       // if (isset($_SESSION['userType']) && $_SESSION['userType']){
       //     echo 'Bạn đã đăng nhập với tên là '.$_SESSION['userType']."<br/>";
       //     echo 'Click vào đây để <a href="logout.php">Logout</a>';
       // }
       // else{
       //     echo 'Bạn chưa đăng nhập';
       // }
	if($_SESSION['userType'] != "member"){
		header("Location: http://localhost/new/Login.php");
	}else{
		 echo 'Bạn đã đăng nhập với tên là '.$_SESSION['userType']."<br/>";
		}
       ?>
	

<!DOCTYPE html>
<html>
<head>
	<title>LogOut</title>
</head>
<body>
	<a href="../controller/logout.php">Dang Xuat</a>
</body>
</html>
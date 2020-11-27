<?php
session_start();
       // if (isset($_SESSION['userType']) && $_SESSION['userType']){
       //     echo 'Bạn đã đăng nhập với tên là '.$_SESSION['userType']."<br/>";
       //     echo 'Click vào đây để <a href="logout.php">Logout</a>';
       // }
       // else{
       //     echo 'Bạn chưa đăng nhập';
       // }
	if($_SESSION['userType'] != "admin"){
		header("Location: http://localhost/new/Login.php");
	}else{
		 //echo 'Bạn đã đăng nhập với tên là '.$_SESSION['userType']."<br/>";
		}

$connect = mysqli_connect("localhost","root","","nhakhoa");
mysqli_query($connect,"SET NAMES 'utf8'");

$connect = mysqli_connect("localhost","root","","nhakhoa");
$query = "SELECT MaProfile,Name,NgaySinh,GioiTinh,QueQuan,DanToc,NgayVaoLam,avata FROM profile LEFT JOIN users ON  users.id = profile.id where users.user_type = 'member' ";
$data = mysqli_query($connect, $query);
$arraydata = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['MaProfile'], $row['Name'], $row['NgaySinh'],$row['GioiTinh'], $row['QueQuan'], $row['DanToc'],$row['NgayVaoLam'],$row['avata']));
	}
	echo json_encode($arraydata,256);



class Lists
{
	function __construct( $MaProfile,$Name,$NgaySinh,$GioiTinh,$QueQuan,$DanToc,$NgayVaoLam,$avata)
	{	

		$this->MaProfile = $MaProfile;
		$this->Name = $Name;
		$this->NgaySinh = $NgaySinh;
		$this->GioiTinh = $GioiTinh;
		$this->QueQuan = $QueQuan;
		$this->DanToc = $DanToc;
		$this->NgayVaoLam = $NgayVaoLam;
		$this->avata = $avata;


		
	}
}
?>
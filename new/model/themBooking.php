<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "nhkhoaver2");
mysqli_query($connect, "SET NAMES 'utf8'");

//Kiểm tra quyền đăng ki đơn cho tùy đối tượng
	if(isset($_SESSION['userType'])) {
			if($_SESSION['userType'] == 'admin' || $_SESSION['userType'] == 'doctor' || $_SESSION['userType'] == 'member'){
				$MaType = "1";
				//echo  "1";
			}
	}else {
				$MaType = "2";
				//echo  "2";
	}

	// username=sđ
	// &yourphone=sadsa
	// &birthday=sadsa
	// &vandeA=A
	// &bs=2
	// &A_1=30-1000000-A_1
	// &A_2=30-500000-A_2&
	// A_3=25-2000000-A_3&
	// A_4=60-200000-A_4
	// &submit=Submit

//===================================Lấy data từ form booking==================================
$Username = $_GET['username'];
//echo $Username ."<br>";
$Yourphone = $_GET['yourphone'];
//echo $Yourphone ."<br>";
$Birthday = $_GET['birthday'];
//echo $Birthday ."<br>";

$TGBD = $_GET['tgbd'];
$TGKT = $_GET['tgkt'];


$vande = $_GET['vande'];
// if(isset($_GET['vandeA'])){ $vande = $_GET['vandeA'];}
// if(isset($_GET['vandeB'])){ $vande = $_GET['vandeB'];}
// if(isset($_GET['vandeC'])){ $vande = $_GET['vandeC'];}
//echo $vande;


$Ma_User = $_GET['bs'];
//echo $Ma_User ."<br>";

$Dich_Vu = "";
if(isset($_GET['A_1'])){$px = explode("-", $_GET['A_1']) ;$Dich_Vu = $Dich_Vu .','.$px[2];}
if(isset($_GET['A_2'])){$px = explode("-", $_GET['A_2']) ;$Dich_Vu = $Dich_Vu .','.$px[2];}
if(isset($_GET['A_3'])){$px = explode("-", $_GET['A_3']) ;$Dich_Vu = $Dich_Vu .','.$px[2];}
if(isset($_GET['A_4'])){$px = explode("-", $_GET['A_4']) ;$Dich_Vu = $Dich_Vu .','.$px[2];}
if(isset($_GET['A_5'])){$px = explode("-", $_GET['A_5']) ;$Dich_Vu = $Dich_Vu .','.$px[2];}
//echo $Dich_Vu;

//INSERT BOOKING
$query = "INSERT into list_booking values(null,'$MaType','$Yourphone')";
mysqli_query($connect, $query);


$connect = mysqli_connect("localhost", "root", "", "nhkhoaver2");
$query = "SELECT * from list_booking where SDT = '$Yourphone'";
$data = mysqli_query($connect, $query);
	$arraydata = array();

	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['MaBooking'], $row['MaType'],$row['SDT']));

	}
	//print_r($arraydata);

	// echo $arraydata[0]->user_type;
$MaBooking = $arraydata[0]->MaBooking;

//========================================================================================
//INSERT detail
$query = "INSERT into booking_detail values('$MaBooking',N'$Username','$Yourphone','$Birthday','$vande','$Dich_Vu','$Ma_User','$TGBD','$TGKT')";
mysqli_query($connect, $query);

//INSlist_detail($MaBooking,$Username,$Yourphone,$Birthday,$vande,$Dich_Vu,$Ma_User,$TGBD,$TGKT);

$query = "SELECT * from booking_detail where SDT = '$Yourphone'";
$data = mysqli_query($connect, $query);
if((mysqli_num_rows($data) == 1)){
	echo "Thanh cong";
} else{
	echo "K thanh cong";
}


//=============================================================================================	

function INSlist($matype,$sdt){
	$connect = mysqli_connect("localhost", "root", "", "nhkhoaver2");
	$query = "INSERT into list_booking values('$matype','$sdt')";
	mysqli_query($connect, $query);
}

function INSlist_detail($ma,$name,$sdt,$ngaysinh,$bophan,$dichvu,$ma_user,$time_BD,$time_KT){
	$connect = mysqli_connect("localhost", "root", "", "nhkhoaver2");
	$query = "INSERT into booking_detail values('$ma',N'$name','$sdt','$ngaysinh','$bophan','$dichvu','$ma_user','$time_BD','$time_KT')";
	mysqli_query($connect, $query);
}


class Lists
	{
		function __construct( $MaBooking, $MaType,$SDT)
		{
			

			$this->MaBooking = $MaBooking;
			$this->MaType = $MaType;
			$this->SDT = $SDT;
			
	}}

?>
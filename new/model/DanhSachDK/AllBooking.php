<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "nhkhoaver2");
mysqli_query($connect, "SET NAMES 'utf8'");

// $query = "SELECT booking_detail.MaBooking,booking_detail.Name,booking_detail.SDT,booking_detail.NgaySinh,booking_detail.BoPhan,booking_detail.DichVu,profile.Ten,booking_detail.ThoiGianBD,booking_detail.ThoiGianKT from profile LEFT JOIN users ON users.MaUser = profile.MaUser LEFT JOIN booking_detail ON booking_detail.MaUser = users.MaUser ";
$query = "SELECT * from booking_detail";
$data = mysqli_query($connect, $query);
$arraydata = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['MaBooking'],$row['Name'],$row['SDT'],$row['NgaySinh'],$row['BoPhan'],$row['DichVu'],$row['MaUser'],$row['ThoiGianBD'],$row['ThoiGianKT']));
	}
	echo json_encode($arraydata,256);



class Lists
	{
		function __construct( $MaBooking,$Name,$SDT,$NgaySinh,$BoPhan,$DichVu,$MaUser,$ThoiGianBD,$ThoiGianKT)
		{
			

			$this->MaBooking = $MaBooking;
			$this->Name = $Name;
			$this->SDT = $SDT;
			$this->NgaySinh = $NgaySinh;
			$this->BoPhan = $BoPhan;
			$this->DichVu = $DichVu;
			$this->MaUser = $MaUser;
			$this->ThoiGianBD = $ThoiGianBD;
			$this->ThoiGianKT = $ThoiGianKT;
			
	}}
?>
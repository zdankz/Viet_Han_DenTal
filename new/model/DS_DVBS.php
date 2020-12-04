<!-- <?php

include('../model/ketnoimysql.php');

$MaUser = $_GET['MaUser'];

$connect = mysqli_connect("localhost", "root", "", "nhkhoaver2");
// $query = "SELECT  DISTINCT profile.Name, profile.avatar FROM epxs LEFT JOIN bophan ON bophan.MaBP = epxs.MaBP LEFT JOIN users ON users.MaUser = epxs.MaUser LEFT JOIN profile ON profile.MaUser = users.MaUser WHERE  bophan.TenBP = 'A' ";

$query = " SELECT DISTINCT dichvu.TenDV, dichvu.QT_TriLieu,dichvu.GiaTien FROM epxs LEFT JOIN users ON users.MaUSer = epxs.MaUser LEFT JOIN profile ON profile.MaUser = users.MaUser LEFT JOIN bophan ON bophan.MaBP = epxs.MaBP LEFT JOIN dichvu ON dichvu.MaDV = epxs.MaDV where profile.MaUser = '$MaUser'";

$data = mysqli_query($connect, $query);
$arraydata = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['TenDV'],$row['QT_TriLieu'],$row['GiaTien']));
	}
	echo json_encode($arraydata,256);

class Lists
{
	function __construct($TenDV,$QT_TriLieu,$GiaTien)
	{			
		$this->TenDV = $TenDV;		
		$this->QT_TriLieu = $QT_TriLieu;
		$this->GiaTien = $GiaTien;		
	}
}
?> -->
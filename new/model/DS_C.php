<?php

include('../model/ketnoimysql.php');

$connect = mysqli_connect("localhost", "root", "", "nhkhoaver2");
// $query = "SELECT  DISTINCT profile.Name, profile.avatar FROM epxs LEFT JOIN bophan ON bophan.MaBP = epxs.MaBP LEFT JOIN users ON users.MaUser = epxs.MaUser LEFT JOIN profile ON profile.MaUser = users.MaUser WHERE  bophan.TenBP = 'A' ";

$query = " SELECT DISTINCT profile.MaUser, profile.Ten, profile.avatar FROM epxs LEFT JOIN users ON users.MaUSer = epxs.MaUser LEFT JOIN profile ON profile.MaUser = users.MaUser LEFT JOIN bophan ON bophan.MaBP = epxs.MaBP LEFT JOIN dichvu ON dichvu.MaDV = epxs.MaDV where bophan.TenBP = 'C'";

$data = mysqli_query($connect, $query);
$arraydata = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['MaUser'],$row['Ten'],$row['avatar']));
	}
	echo json_encode($arraydata,256);

class Lists
{
	function __construct($MaUser,$Ten,$avatar)
	{			
		$this->MaUser = $MaUser;
		$this->Ten = $Ten;		
		$this->avatar = $avatar;		
	}
}
?>
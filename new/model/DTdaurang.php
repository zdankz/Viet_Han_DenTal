<?php

include('../model/ketnoimysql.php');

$connect = mysqli_connect("localhost", "root", "", "nhakhoa");
$query = "SELECT  DISTINCT profile.Name, profile.avata FROM epxdv LEFT JOIN dichvu ON dichvu.MaDV = epxdv.MaDV LEFT JOIN profile ON profile.MaProfile = epxdv.MaProfile  WHERE   dichvu.TenDV = 'Đau Răng' ";


$data = mysqli_query($connect, $query);
$arraydata = array();
	while ($row = mysqli_fetch_assoc($data)) {
		# code...
		array_push($arraydata, new Lists($row['Name'],$row['avata']));
	}
	echo json_encode($arraydata,256);

class Lists
{
	function __construct($Name,$avata)
	{			
		$this->Name = $Name;		
		$this->avata = $avata;		
	}
}
?>
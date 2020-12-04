<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  /*border: 1px solid black;*/
/*  padding: 5px;*/
}

th {text-align: left;}
</style>
<body>

<?php
$MaUser = intval($_GET['MaUser']);

$connect = mysqli_connect("localhost", "root", "", "nhkhoaver2");

$query = " SELECT DISTINCT dichvu.TenDV, dichvu.QT_TriLieu,dichvu.time_turn,dichvu.GiaTien FROM epxs LEFT JOIN users ON users.MaUSer = epxs.MaUser LEFT JOIN profile ON profile.MaUser = users.MaUser LEFT JOIN bophan ON bophan.MaBP = epxs.MaBP LEFT JOIN dichvu ON dichvu.MaDV = epxs.MaDV where profile.MaUser = '$MaUser'";

$data = mysqli_query($connect, $query);
echo "<table>
<tr>
<th></th>
<th>Dịch Vụ</th>
<th>Quá Trình Trị Liệu</th>
<th>Thời Gian 1 Lần Điều Trị</th>
<th>Chi Phí</th>
</tr>";

while($row = mysqli_fetch_array($data)) {
  echo "<tr>";
  echo "<td>"."<input type='checkbox' id='checkDV' name='".$row['TenDV']."' value='".$row['time_turn']."-".$row['GiaTien']."+".$row['TenDV']."' onchange='tinh_thoigian_and_tien(this.value)'/>"."</td>";
  echo "<td>" . $row['TenDV'] . "</td>";
  echo "<td>" . $row['QT_TriLieu'] . "</td>";
  echo "<td>" . $row['time_turn'] . "</td>";
  echo "<td>" . $row['GiaTien'] . "</td>";  
  echo "</tr>";
}
echo "</table>";
mysqli_close($connect);

?>




</body>
</html>
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
       ?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" href="../public/css/style.css" />
	<script type="text/javascript" src="../public/js/javascript.js" ></script>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('input[type="radio"]').click (function(){
			var inputValue = $(this).attr("valua")
			var targetBox = $("."+ inputValue);
			$(".box").not(targetBox).hide();
			$(targetBox).show();
		});
 });
</script>
<script>
		const url ="../model/adapterNV.php";
		fetch(url).then(
			res=>{
				res.json().then(
					data=>{
						console.log(data);
						if(data.length > 0) {

							var temp = "";
							data.forEach((u)=> {
								
								temp +="<tr>";
								temp += "<td>"+ u.MaProfile +"</td>";
									
								temp += "<td>"+"<a href='#'>"+ u.Name+"</a>" +"</td>";
								
								temp += "<td>"+ u.NgaySinh +"</td>";
								temp += "<td>"+ u.GioiTinh +"</td>";
								temp += "<td>"+ u.QueQuan +"</td>";
								temp += "<td>"+ u.DanToc +"</td>";
								temp += "<td>"+ u.NgayVaoLam +"</td>";
								temp += "<td >"+ u.avata +"</td>";
								
								temp += "<td style='text-align:center'>"+"<p><a href='#'>EDIT</a></br><a href='#'>DELETE</a></p>"+"</td>";				

								})
						
						document.getElementById("data").innerHTML = temp;
						}
					}
					)
			}
			)
	</script>
	
</head>
<body >
	

	<div id="main">
		<!--=========================HEADER================================= > -->
		<div id="head">
			
		</div>
		<!--==============================LINK========================== > -->
		<div id="head-link">
			<a href="../controller/logout.php">Dang Xuat  ok nha ae</a>
			<?php echo 'Bạn đã đăng nhập với tên là '.$_SESSION['userType']."<br/>"; ?>
			
		</div>
		<!--====================================LEFT========================= > -->

		<!-- <div id="left">
			
		</div> -->
		<!--===================================CONTENT======================== > -->
		<center>
		<div id="content">
			<!--=============Phân Nhánh Bộ Phận==================================-->
			<p>
				<input class="phannhanh" type="radio" name="phansu" valua="book" checked>Danh Sách Đơn Đặt
				<input class="phannhanh" type="radio" name="phansu" valua="duyet" >Danh Sách Duyệt
				<input class="phannhanh" type="radio" name="phansu" valua="member" >Danh Sách Nhân Viên
				<input class="phannhanh" type="radio" name="phansu" valua="doctor" >Danh Sách Bác Sĩ
			</p>
			<div class="box book">
				<h2>Đây là danh sách đơn đăng kí từ khách hàng</h2>
			</div>
			<div class="box duyet">
				<h2>Đây là danh sách đơn đã phê duyệt</h2>
			</div>
			<div class="box member">
				<h2>Đây là danh sách Nhân Viên</h2>
				<!-- <table class="table table-striped table-dark" width="800px">
					<th>Số TT</th>
					<th>Họ Và Tên</th>
					<th>Ngày Sinh</th>
					<th>Giới Tính</th>
					<th>Quê Quán</th>
					<th>Dân Tộc</th>
					<th>Ngày Vào Làm</th>
					<th>Avata</th>
					<th style='text-align:center'>Settings</th>

		<tbody id="data">
			
			
		</tbody>
	</table> -->
			</div>
			<div class="box doctor" >
				<h2>Đây là danh sách Bác Sĩ</h2>
			</div>
		</div>
		</center>
		<!--===================================RIGHT======================== > -->
		<!-- <div id="right">

		</div> -->
		<!--====================================FOOTER======================= > -->
		<div id="footer">
			
		</div>
		
	</div>




















</body>
</html>
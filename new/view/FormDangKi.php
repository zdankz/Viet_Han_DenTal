<!DOCTYPE html>
<html>
<head>
	<title>Đăng Kí Lịch Khám</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="../public/css/style.css" />
	<script type="text/javascript" src="../public/js/javascript.js" ></script>
	<script type="text/javascript" src="../public/js/jquery-latest.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">	
		$(document).ready(function(){
			var a = 1;
			var b = dienthontin.username.value;
			$('input[type="checkbox"]').click (function(){
			var inputValue = $(this).attr("value")
			var targetBox = $("."+ inputValue);
			$(".thongtin").not(targetBox).hide();
			
				$(targetBox).show();
			
		});
 });
</script>


</head>
<body>
	<form id="formdangky" name="dienthontin">
		<center><h4 style="margin-top: 10px;">REGISTER</h4></center>
		<!--=======================PHAN DIEN THONG TIN===============-->
		<div id="thongtinnguoidangky" >
			<label style="font-weight: bold;">Username</label><br>
			<input class="inputthongtin" type="text" placeholder="" name="username" required><br>
			<label class="theten">Your Phone</label><br>
			<input class="inputthongtin" type="text" placeholder=" " name="yourphone" required><br>
			<label class="theten">Birth Day</label><br>
			<input class="inputthongtin" type="text" placeholder="YY-MM-DD " name="birthday" required><br>
			<center><input style="margin-top: 20px;" type="checkbox" id="checkboxvande" name="checkboxvande" value="vande">
			<label for="vehicle1">Tiếp tục</label><br></center>
		</div>

		<!--=======================PHAN VAN DE===============-->
		<div class="thongtin vande" style="float: left;	background-color: #b7e8db;	margin-left: 10px;	border: 1px solid #041503;	width: 700px;	padding-left: 10px;	min-height: 280px;	padding-top: 10px;">
				<label style="font-weight: bold;">Bạn gặp phải về đề gì?</label><br>
			<div class="checkbox-card">
					<div class="checkbox">
							<input class="checkme0" style="margin-top: 0px;" type="checkbox" id="checkboxvande" name="checkboxvande" value="vande"><label  style="margin-left: 10px;" for="vehicle1">Chọn Tất Cả</label><br>
							<input class="checkme" style="margin-top: 0px;" type="checkbox" id="checkboxvande" name="checkboxvande" value="vande"><label  style="margin-left: 10px;" for="vehicle1">Sâu Răng</label><br>
							<input class="checkme2" style="margin-top: 0px;" type="checkbox" id="checkboxvande" name="checkboxvande" value="vande"><label style="margin-left: 10px;" for="vehicle1">Đau Răng</label><br>
							<input class="checkme3" style="margin-top: 0px;" type="checkbox" id="checkboxvande" name="checkboxvande" value="vande"><label style="margin-left: 10px;" for="vehicle1">Viêm Răng</label><br>
					</div>
					<div class="AAAA" >
							<a>BS Trị Sâu Răng</a>	
							<table style="margin-left: 0px;width: 100%;border:0px solid black;border-collapse: collapse;margin-right: 10px;">
								<tbody id="data">
								
			
								</tbody>
							</table>						
					</div>
					<div class="BBBB">
						<a >BS Trị Đau Răng</a>
						<table style="margin-left: 0px;width: 100%;border:0px solid black;border-collapse: collapse;margin-right: 10px;">
								<tbody id="data1">
								
			
								</tbody>
							</table>
					</div>	
					<div class="CCCC">
						<a >BS Trị Viêm Răng</a>
						<table style="margin-left: 0px;width: 100%;border:0px solid black;border-collapse: collapse;margin-right: 10px;">
								<tbody id="data2">
								
			
								</tbody>
							</table>
					</div>
					<div class="AABB">
						<a>Bác Sĩ Trị Sâu Và Đau Răng</a>
					</div>
					<div class="AACC">
						<a>Bác Sĩ Trị Sâu Và Viêm Răng</a>
					</div>
					<div class="BBCC">
						<a>Bác Sĩ Trị Đau và Viêm Răng</a>
					</div>
					<div class="AABBCC" style="display: none;">
						<a>Bác Sĩ Trị Sâu Và Trị Đau và Viêm Răng</a>
					</div>


			</div>
		</div>

		
	</form>
	

<script>
		const url ="../model/DTsaurang.php";
		fetch(url).then(
			res=>{
				res.json().then(
					data=>{
						console.log(data);
						if(data.length > 0) {

							var temp = "";
							data.forEach((u)=> {
								
								temp +="<th>";
								
									
								// temp += "<tr>"+ u.Name+"</tr>";
								
								
								temp += "<td >"+"<a href='#'>"+ u.avata +"</a>"+"</br>"+ u.Name+"</td>";
								
											

								})
						
						document.getElementById("data").innerHTML = temp;
						}
					}
					)
			}
			)
	</script>
	<script>
		const url1 ="../model/DTdaurang.php";
		fetch(url1).then(
			res=>{
				res.json().then(
					data=>{
						console.log(data);
						if(data.length > 0) {

							var temp1 = "";
							data.forEach((u)=> {
								
								temp1 +="<th>";
								
									
								// temp += "<tr>"+ u.Name+"</tr>";
								
								
								temp1 += "<td >"+"<a href='#'>"+ u.avata +"</a>"+"</br>"+ u.Name+"</td>";
								
											

								})
						
						document.getElementById("data1").innerHTML = temp1;
						}
					}
					)
			}
			)
	</script>
	
<script>
	//FUNC chọn TẤT CẢ
	$(document).ready(function(){
		$(".checkbox .checkme0").click(function(){
			var all = $(this).is(':checked');
			$(".checkbox input[type='checkbox']").prop('checked',this.checked);
			if(all == true){
				$(this).parents(".checkbox-card").find('.AABBCC').show();
			}else{
				$(this).parents(".checkbox-card").find('.AABBCC').hide();
			}
		});
	});

	//Funtion hiện bác sĩ TRỊ SÂU RĂNG
	$(function()
	{
	
		$(".checkme").click(function(event)
			{
				var saurang = $(this).is(':checked');
				if (saurang == true)
					{
						$(this).parents(".checkbox-card").find('.AAAA').show();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();

					}else {
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();

						
					}

						
			});
		})
		//Funtion hiện bác sĩ TRỊ ĐAU RĂNG
		$(function()
	{
		$(".checkme2" ).click(function(event)
			{
				var daurang = $(this).is(':checked');
				if (daurang == true)
					{
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').show();
						$(this).parents(".checkbox-card").find('.CCCC').hide();
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();

					}else{
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();						
						$(this).parents(".checkbox-card").find('.CCCC').hide();
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}		

						
			});
		})
		//Funtion hiện bác sĩ TRỊ VIÊM RĂNG
		$(function()
	{
		$(".checkme3" ).click(function(event)
			{
				var viemrang = $(this).is(':checked');
				if (viemrang == true)
					{
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').show();
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();

					}else{
						$(this).parents(".checkbox-card").find('.CCCC').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();						
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}		
						
			});
			})

		//Funtion hiện bác sĩ TRỊ SÂU VÀ TRỊ ĐAU RANG
		$(function()
	{
		$(".checkme").click(function(event)
			{
				var saurang = $(this).is(':checked');
				$(".checkme2" ).click(function(event)
			{
				var daurang = $(this).is(':checked');
				if (saurang == true && daurang == true)
					{
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();
						$(this).parents(".checkbox-card").find('.AABB').show();
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();

					}else if(saurang == false && daurang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(saurang == false && daurang == true){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').show();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(saurang == true && daurang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').show();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else{
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}		
						
			});		
			});

	})
		//Funtion hiện bác sĩ TRỊ ĐAU RANG và SÂU RĂNG
		$(function()
	{
		$(".checkme2").click(function(event)
			{
				var daurang = $(this).is(':checked');
				$(".checkme" ).click(function(event)
			{
				var saurang = $(this).is(':checked');
				if (saurang == true && daurang == true)
					{
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();
						$(this).parents(".checkbox-card").find('.AABB').show();
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();

					}else if(saurang == false && daurang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(daurang == false && saurang == true){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').show();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(daurang == true && saurang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').show();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else{
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}		
						
			});		
			});

	})
		//Funtion hiện bác sĩ TRỊ SÂU RĂNG VÀ VIÊM RĂNG
		//Funtion hiện bác sĩ TRỊ SÂU VÀ TRỊ ĐAU RANG
		$(function()
	{
		$(".checkme2").click(function(event)
			{
				var daurang = $(this).is(':checked');
				$(".checkme3" ).click(function(event)
			{
				var viemrang = $(this).is(':checked');
				if (daurang == true && viemrang == true)
					{
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').show();

					}else if(daurang == false && viemrang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(daurang == false && viemrang == true){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').show();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(daurang == true && viemrang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').show();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else{
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}		
						
			});		
			});

	})
		//Funtion hiện bác sĩ TRỊ ĐAU RANG và SÂU RĂNG
		$(function()
	{
		$(".checkme3").click(function(event)
			{
				var viemrang = $(this).is(':checked');
				$(".checkme2" ).click(function(event)
			{
				var daurang = $(this).is(':checked');
				if (daurang == true && viemrang == true)
					{
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').show();

					}else if(daurang == false && viemrang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(viemrang == false && daurang == true){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').show();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(viemrang == true && daurang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').show();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else{
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}		
						
			});		
			});

	})
		//Funtion hiện bác sĩ  SÂU RĂNG và VIÊM RĂNG
 		$(function()
	{
		$(".checkme").click(function(event)
			{
				var saurang = $(this).is(':checked');
				$(".checkme3" ).click(function(event)
			{
				var viemrang = $(this).is(':checked');
				if (saurang == true && viemrang == true)
					{
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AACC').show();
						$(this).parents(".checkbox-card").find('.BBCC').hide();

					}else if(saurang == false && viemrang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(saurang == false && viemrang == true){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').show();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(saurang == true && viemrang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').show();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else{
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}		
						
			});		
			});

	})
		//Funtion hiện bác sĩ TRỊ ĐAU RANG và SÂU RĂNG
		$(function()
	{
		$(".checkme3").click(function(event)
			{
				var viemrang = $(this).is(':checked');
				$(".checkme" ).click(function(event)
			{
				var saurang = $(this).is(':checked');
				if (saurang == true && viemrang == true)
					{
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AACC').show();
						$(this).parents(".checkbox-card").find('.BBCC').hide();

					}else if(saurang == false && viemrang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(viemrang == false && saurang == true){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').show();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else if(viemrang == true && saurang == false){
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').show();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}
					else{
						$(this).parents(".checkbox-card").find('.AABB').hide();
						$(this).parents(".checkbox-card").find('.AAAA').hide();
						$(this).parents(".checkbox-card").find('.BBBB').hide();
						$(this).parents(".checkbox-card").find('.CCCC').hide();						
						$(this).parents(".checkbox-card").find('.AACC').hide();
						$(this).parents(".checkbox-card").find('.BBCC').hide();
					}		
						
			});		
			});

	})











// 	$(function(){
// 	$(".checkme" ).click(function(event){
// 		var x = $(this).is(':checked');
// 		$(".checkme2").click(function(event){
// 			var y = $(this).is(':checked');
// 			if(x == true && y == true){
// 				$(this).parents(".checkbox-card").find('.CCCC').show();
// 				$(this).parents(".checkbox-card").find('.BBBB').hide();
// 				$(this).parents(".checkbox-card").find('.AAAA').hide();
// 			}else if(x != true && y != true){
// 			$(this).parents(".checkbox-card").find('.AAAA').hide();
// 			$(this).parents(".checkbox-card").find('.BBBB').show();
			
// 		}
// 		});
// 		// 		if(x == true) {
// 		// 	$(this).parents(".checkbox-card").find('.AAAA').show();
			
// 		// 	$(this).parents(".checkbox-card").find('.BBBB').hide();
// 		// }
// 		// else{
// 		// 	$(this).parents(".checkbox-card").find('.AAAA').hide();
// 		// 	$(this).parents(".checkbox-card").find('.BBBB').show();
			
// 		// }
// 	});
// })


	
</script>
</body>
</html>
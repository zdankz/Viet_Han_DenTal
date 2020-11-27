<!DOCTYPE html>
<html>
<head>
	<title>Đăng Kí Lịch Khám</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="../public/css/style.css" />
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
							<input class="checkme" style="margin-top: 0px;" type="checkbox" id="checkboxvande" name="checkboxvande" value="vande"><label style="margin-left: 10px;" for="vehicle1">Sâu Răng</label><br>
							<input style="margin-top: 0px;" type="checkbox" id="checkboxvande" name="checkboxvande" value="vande"><label style="margin-left: 10px;" for="vehicle1">Đau Răng</label><br>
							<input style="margin-top: 0px;" type="checkbox" id="checkboxvande" name="checkboxvande" value="vande"><label style="margin-left: 10px;" for="vehicle1">Viêm Răng</label><br>
					</div>
					<div class="AAAA">
							<a>BS A</a>							
					</div>
					<div class="BBBB">
						<a >BS B</a>
					</div>	
					<div class="CCCC">
						<a >Ca BS A va BS B</a>
					</div>

			</div>
		</div>

		
	</form>
	
<script>
	$(function(){
	$(".checkme").click(function(event){
		var x = $(this).is(':checked');
		if(x == true) {
			$(this).parents(".checkbox-card").find('.AAAA').show();
			
			$(this).parents(".checkbox-card").find('.BBBB').hide();
		}
		else{
			$(this).parents(".checkbox-card").find('.AAAA').hide();
			$(this).parents(".checkbox-card").find('.BBBB').show();
			
		}
	});
})
</script>
</body>
</html>
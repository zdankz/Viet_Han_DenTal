<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<meta charset="utf-8">
    <meta name="author" content="...">
	<link rel="stylesheet" href="../public/css/stylebooking.css" />
	<script type="text/javascript" src="../public/js/booking.js" ></script>
	<script type="text/javascript" src="../public/js/jquery-latest.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
	<div class="main" >
		<div class="content_code">
			<center><h3>REGISTER</h3></center>
			<form class="FORMDK" action="../model/themBooking.php" method="GET">
			<div class="thongtinnguoidangky" >
				<label class="theten">Username</label><br>
				<input class="inputthongtin" type="text" placeholder="" name="username" required><br>
				<label  class="theten">Your Phone</label><br>
				<input class="inputthongtin" type="text" placeholder=" " name="yourphone" required><br>
				<label  class="theten">Birth Day</label><br>
				<input class="inputthongtin" type="text" placeholder="YY-MM-DD " name="birthday" required><br>
				<!-- <center><input class="showVD" style="margin-top: 20px;" type="checkbox" id="checkboxvande" name="checkboxvande" value="vande">
				<label for="vehicle1">Tiếp tục</label><br></center> -->
			</div>
			<!-- <div> -->
			<div class="Van_De_Gap_Phai">
				<br>
				<br>
				<div class="checkbox"> 
					<h3 class="Tieu_De_Div">Bạn đang gặp phải vấn đề gì?</h3>
					<input class="theinput" id ="checkA" type="checkbox" name="vande" value="A" />
					<label>Vấn đề A</label><BR>
					<input class="theinput" id ="checkB" type="checkbox" name="vande" value="B"/>
					<label>Vấn đề B</label><BR>
					<input class="theinput" id="checkC" type="checkbox" name="vande" value="C"/>
					<label>Vấn đề C</label><BR>
					<!-- <input class="theinput" id="checkD" type="checkbox" name="vandeD" value="D"/> -->
					<!-- <label>Vấn đề D</label><BR>
					<input class="theinput" id="checkE" type="checkbox" name="vandeE" value="E"/>
					<label>Vấn đề E</label><BR>	 -->
				</div>				
			<!-- <div class="DOCTOR"s> -->
				<div class="tieudeLISTBS" id="AAAA">
						<h4>Bác Sĩ Thuộc Vấn Đề A</h4>
						<table style="margin-left: 0px;width: 100%;border:0px solid black;border-collapse: collapse;margin-right: 10px;">
								<tbody id="vd1">
								
			
								</tbody>
							</table>						
				</div>
				<div id= "BBBB" class="tieudeLISTBS">
						<h4>Bác Sĩ Thuộc Vấn Đề B</h4>
						<table style="margin-left: 0px;width: 100%;border:0px solid black;border-collapse: collapse;margin-right: 10px;">
								<tbody id="vd2">
								
			
								</tbody>
							</table>	
						
				</div>					
				<div id="CCCC" class="tieudeLISTBS">
						<h4>Bác Sĩ Thuộc Vấn Đề C</h4>
						<table style="margin-left: 0px;width: 100%;border:0px solid black;border-collapse: collapse;margin-right: 10px;">
								<tbody id="vd3">
								
			
								</tbody>
							</table>	
						
				</div>
			</div>

			<div class="dvbs" id="txtHint">
				<!-- <b>Person info will be listed here.</b> -->
			</div>
			<div class="tinhtoan" id="tinhtoan">
				TGBD<input type="text" name="tgbd" placeholder="vd 2020-12-30  14:30:00" required>


				<br><br>
				TGKT<input type="text" name="tgkt" placeholder="vd 2020-12-30  14:30:00" required>
				<input id="thoi_gian" style="margin: 20px;" type="text" name="thoigian" value="0" size="10" disabled="" /><label id="label_thogian" name="lb_tg" value="0"></label>
				
				<br><input disabled="" id="tien_bac" style="margin: 20px;" type="text" name="tongtien" value="0" size="10" />VND
				
			</div>	
			<div class="btn_sm">
				<center><input class="btn_submit" type="submit" name="submit">	</center>
			</div>
					
			</form>			
		</div>		
	</div>
<script type="text/javascript">	
	
		$(document).ready(function(){
    	$('#checkA').change(function(){
        if(this.checked)
            $('#AAAA').fadeIn('slow');
                  	
        	
        else
            $('#AAAA').fadeOut('slow');
        	

   			 });
		});	

		$(document).ready(function(){
    	$('#checkB').change(function(){
        if(this.checked)
            $('#BBBB').fadeIn('slow');
        else
            $('#BBBB').fadeOut('slow');        	

   			 });
		});

		$(document).ready(function(){
    	$('#checkC').change(function(){
        if(this.checked)
            $('#CCCC').fadeIn('slow');
        else
            $('#CCCC').fadeOut('slow');        	

   			 });
		});
</script>	
<script>
		const url ="../model/DS_A.php";
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
								
								
								temp += "<td >"+"<a>"+ u.avatar +"</a>"+"</br>"+"<input type='radio' id='' name='bs' value='"+u.MaUser+"' onclick='showDV(this.value)'>"+ u.Ten+""+u.MaUser+"</td>";
								
											

								})
						
						document.getElementById("vd1").innerHTML = temp;
						}
					}
					)
			}
			)
	</script>

	<script>
		const url1 ="../model/DS_B.php";
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
								
								
								temp1 += "<td >"+"<a>"+ u.avatar +"</a>"+"</br>"+"<input type='radio' id='' name='bs' value='"+u.MaUser+"' onclick='showDV(this.value)'>"+ u.Ten+""+u.MaUser+"</td>";
								
											

								})
						
						document.getElementById("vd2").innerHTML = temp1;
						}
					}
					)
			}
			)
	</script>


	<script>
		const url2 ="../model/DS_C.php";
		fetch(url2).then(
			res=>{
				res.json().then(
					data=>{
						console.log(data);
						if(data.length > 0) {

							var temp2 = "";
							data.forEach((u)=> {
								
								temp2 +="<th>";
								
									
								// temp += "<tr>"+ u.Name+"</tr>";
								
								
								temp2 += "<td >"+"<a>"+ u.avatar +"</a>"+"</br>"+"<input type='radio' id='' name='bs' value='"+u.MaUser+"' onclick='showDV(this.value)'>"+ u.Ten+""+u.MaUser+"</td>";
								
											

								})
						
						document.getElementById("vd3").innerHTML = temp2;
						}
					}
					)
			}
			)



	
	</script>
	
	
</body>

</html>
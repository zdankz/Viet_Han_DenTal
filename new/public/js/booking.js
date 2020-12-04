// function check_checkbox(id_checkbox) 
// 	{
// 	// body...
// 		var vande = document.getElementById('id_checkbox');
// 		if(id_checkbox.checked)
// 			{
// 				return 1;
// 			}
// 	}




	// 	$(document).ready(function(){
	// 		var a = 1;
	// 		var b = dienthontin.username.value;
	// 		$('input[type="checkbox"]').click (function(){
	// 		var inputValue = $(this).attr("value")
	// 		var targetBox = $("."+ inputValue);
	// 		$(".thongtin").not(targetBox).hide();
			
	// 			$(targetBox).show();
			
	// 	});d
 // });
 // $(function()
	// {
	
	// 	$(".checkA" && ".checkB" ).click(function(event)
	// 		{
	// 			var saurang = $(this).is(':checked');
	// 			if (saurang == true)
	// 				{
	// 					$(this).parents(".Van_De_Gap_Phai").find('.AABB').show();
						
	// 				}else if(saurang == null){
	// 					$(this).parents(".Van_De_Gap_Phai").find('.AABB').hide();
	// 				}
	// 				else {
	// 					$(this).parents(".Van_De_Gap_Phai").find('.AABB').hide();			
						
	// 				}						
	// 		});
	// 	})
	// function check_checkbox() 
	// {
	
	// 	// var checkA = document.getElementById("check1");		
	// 	// if(checkA.checked)
	// 	// 	{
	// 	// 		alert("checked");
	// 	// 		$(this).parents(".Van_De_Gap_Phai").find('.AAAA').show();
			
	// 	// 	}
	// 	// 	else{
	// 	// 		alert("NOOOOO")
	// 	// 	}
	// 	$(document).ready(function(){
 //    	$('#checkA').change(function(){
 //        if(this.checked)
 //            $('#AAAA').fadeIn('slow');
 //        else
 //            $('#AAAA').fadeOut('slow');

 //    	});
	// });
	// }
// Hiển thị danh sách các dịch vụ của từng bác sĩ, Dùng phương thức XMLHttp request//
function showDV(str) {
	if (str == "") {
		document.getElementById("txtHint").innerHTML="";
    return;
	}
	var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","../model/LIST_DV.php?MaUser="+str,true);
  xmlhttp.send();
}

// Hàm tính thời gian khi chon các dịch vụ
//function tính toán có dùng cắt chuỗi value chứa 2 giá trị Thời gian + Chi Phí
function tinh_thoigian_and_tien(str) {	
	var time = str.split("-",1);
	var tongTG = document.getElementById("thoi_gian").value;	
	document.getElementById("thoi_gian").value = (tongTG) - (-time);

	var chuoi = str;
	var tien = chuoi.substring(chuoi.indexOf("-") +1);
	var tongtienHT = document.getElementById("tien_bac").value;
	document.getElementById("tien_bac").value = (tongtienHT)-(-tien) ;
	// 
}





function converPhut_Gio(n){
	var num = n;
var hours = (num / 60);
var rhours = Math.floor(hours);
var minutes = (hours - rhours) * 60;
var rminutes = Math.round(minutes);
return num + " minutes = " + rhours + " hour(s) and " + rminutes + " minute(s).";






}



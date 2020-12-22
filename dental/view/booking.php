<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../public/css/datlich.css" />
    <meta charset="utf-8">
    <meta name="author" content="...">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script type="text/javascript" src="../public/js/booking.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <!-- =======CHON ALL OR NOT======= -->
    <script type='text/javascript'>
     $(document).ready(function(){
       // Check or Uncheck All checkboxes
       $("#checkall").change(function(){
         var checked = $(this).is(':checked');
         if(checked){
           $(".checkbox").each(function(){
             $(this).prop("checked",true);
           });
         }else{
           $(".checkbox").each(function(){
             $(this).prop("checked",false);
           });
         }
       });
     
      // Changing state of CheckAll checkbox 
      $(".checkbox").click(function(){
     
        if($(".checkbox").length == $(".checkbox:checked").length) {
          $("#checkall").prop("checked", true);
        } else {
          $("#checkall").removeAttr("checked");
        }

      });
    });
    </script>

  

    <!-- <script type="text/javascript">
    $(document).ready(function(){
      $('input[type="radio"]').click (function(){
      var inputValue = $(this).attr("value")
      var targetBox = $("."+ inputValue);
      $(".box").not(targetBox).hide();
      $(targetBox).show();
    });
 });
</script> -->
    <title>Booking Online</title>
    <style>

body {font-family: Verdana, sans-serif; margin:0}


/* On smaller screens, decrease text size */

</style>
</head>
<body style="background-color:#13050561;" >  

<div class="slideshow-container">

  <div class="mySlides fade">
    <div id="content1">
  <!-- ========================FORM CHỌN VẤN ĐỀ GẶP PHẢI====================================== -->  
    <form class="FORM_VAN_DE">
      <div><h3 class="tieude">Choose your problem sites from below options</h3></div>
      <h5 class="tieude">THẨM MỸ</h5>
      <div class="thammy">
        <div class="container">
        <label class="option_item">
          <input type="radio" id="tuvan" name="thammy" value="Tư Vấn">
          <div class="option_inner facebook">
            <div class="tickmark"></div>
            <div class="icon"><i class="fas fa-user-nurse"></i></div>
            <div class="name">Tư Vấn Răng Miệng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" id="checkall" value="Tất Cả">
          <div class="option_inner reddit">
            <div class="tickmark"></div>
            <div class="icon"><i class="fas fa-check-circle"></i></div>
            <div class="name">Chọn Tất Cả</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Làm Trắng Răng">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fas fa-tooth"></i></div>
            <div class="name">Làm Trắng Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox"  name="thammy" value="Trắm Răng">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fas fa-tooth"></i></div>
            <div class="name">Trắm Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Dán Răng Sứ" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Dán Răng Sứ</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Bọc Răng">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Bọc Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Định Hình">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Định Hình</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Tạo Viền Răng" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Tạo Viền Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Niềng Răng" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Niềng Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Cầu Răng" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Cầu Răng</div>
          </div>
        </label>          
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Cấy Răng">
          <div class="option_inner quora">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-quora"></i></div>
            <div class="name">Cấy Răng</div>
          </div>
        </label>
        </div>    
      </div>
      <h5 class="tieude">BỆNH LÝ</h5>
      <div class="benhly">
        <div class="container">
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="benhly" value="Đau Răng">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fas fa-tooth"></i></div>
            <div class="name">Đau Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox"  name="benhly" value="Răng Ố Màu">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fas fa-tooth"></i></div>
            <div class="name">Răng Ố Màu</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="benhly" value="Sâu Răng" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Sâu Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="benhly" value="Răng Bị Mẻ">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Răng Bị Mẻ</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="benhly" value="Răng Bị Nứt">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Răng Bị Nứt</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="benhly" value="Răng Mọc Lệch" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Răng Mọc Lệch</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="benhly" value="Quá Nhiều Răng" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Quá Nhiều Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="benhly" value="Răng Khấp Khiểng" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Răng Khấp Khiểng</div>
          </div>
        </label>          
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="benhly" value="Răng Thưa">
          <div class="option_inner quora">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-quora"></i></div>
            <div class="name">Răng Thưa</div>
          </div>
        </label> 
        </div>    
      </div>
    </form><!-- .===========================KẾT THÚC FORM CHỌN VẤN ĐỀ===============================. --> 

    </div>
   
    
  </div>

  <div class="mySlides fade">
    <div id="content2">
  <!-- ========================FORM CHỌN VẤN ĐỀ GẶP PHẢI====================================== -->  
    <form class="FORM_VAN_DE">
      <div><h3 class="tieude">Choose doctor from below options</h3></div>
      <h5 class="tieude">Danh Sách Bác Sĩ Có Thể Giúp Bạn</h5>
      <div class="thammy">
        <div class="container2">
          <div id="DSBS">
            
          </div>
        <!-- <label class="option_item">
          <input type="radio" id="tuvan" name="thammy" value="Tư Vấn">
          <div class="option_inner facebook">
            <div class="tickmark"></div>
            <div class="icon"><i class="fas fa-user-nurse"></i></div>
            <div class="name">Tư Vấn Răng Miệng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" id="checkall" value="Tất Cả">
          <div class="option_inner reddit">
            <div class="tickmark"></div>
            <div class="icon"><i class="fas fa-check-circle"></i></div>
            <div class="name">Chọn Tất Cả</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Làm Trắng Răng">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fas fa-tooth"></i></div>
            <div class="name">Làm Trắng Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox"  name="thammy" value="Trắm Răng">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fas fa-tooth"></i></div>
            <div class="name">Trắm Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Dán Răng Sứ" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Dán Răng Sứ</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Bọc Răng">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Bọc Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Định Hình">
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Định Hình</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Tạo Viền Răng" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Tạo Viền Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Niềng Răng" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Niềng Răng</div>
          </div>
        </label>
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Cầu Răng" >
          <div class="option_inner twitter">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <div class="name">Cầu Răng</div>
          </div>
        </label>          
        <label class="option_item">
          <input type="checkbox" class="checkbox" name="thammy" value="Cấy Răng">
          <div class="option_inner quora">
            <div class="tickmark"></div>
            <div class="icon"><i class="fab fa-quora"></i></div>
            <div class="name">Cấy Răng</div>
          </div>
        </label> -->
        </div>    
      </div>
      
    </form><!-- .===========================KẾT THÚC FORM CHỌN VẤN ĐỀ===============================. --> 

    </div>
    
   
  </div>

  <div class="mySlides fade">
    

  </div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
<center><input style="margin-top: 5px;" type="button"  onclick="CHECKED()" value="TIẾP TỤC" >
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<script>
    const url ="../model/dsBSfromVD.php";
    fetch(url).then(
      res=>{
        res.json().then(
          data=>{
            console.log(data);
            if(data.length > 0) {

              var temp = "";
              data.forEach((u)=> {
                
                temp +="<label class='option_item'>";
                temp += "<input type='checkbox' value=''>";
                  
                temp += "<div class='option_inner reddit'>";
                temp += "<div class='icon'><i class='fas fa-check-circle'></i></div>"
                temp += "<div class='name' >Chọn Tất Cả</div></div></label>"
                
                // temp += "<td>"+ u.SDT +"</td>";
                // temp += "<td>"+ u.NgaySinh +"</td>";
                // temp += "<td>"+ u.BoPhan +"</td>";
                // temp += "<td>"+ u.DichVu +"</td>";
                // temp += "<td>"+ u.MaUser +"</td>";
                // temp += "<td >"+ u.ThoiGianBD +"</td>";
                // temp += "<td >"+ u.ThoiGianKT +"</td>";
                // temp += "<td style='text-align:center'>"+"<p><a href='#'>EDIT</a></br><a href='#'>DELETE</a></p>"+"</td>";        

                })
            
            document.getElementById("data").innerHTML = temp;
            }
          }
          )
      }
      )
  </script>

</body>
</body>
</html>
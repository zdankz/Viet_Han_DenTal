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
</head>
<body style="background-color: #fff;">  
<form action="#" method="GET" >

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
<div id="content2">
   
   

</div>



 



<!-- =====================================CONTROL============================================ -->
<!-- <div id="right"><center><img src="../public/images/arrow_next.png" width="50" height="50" alt="arrow_next" onclick=""></center></div>
<div id="left"><center><img src="../public/images/arrow_back.png" width="50" height="50" alt="arrow_back" onclick=""></center></div> -->
<!-- =====================================END CONTROL============================================ -->
<center><input style="margin-top: 5px;" type="button" onclick="CHECKED()" value="TIẾP TỤC">
<!-- <br><br><input type="text" id="order" size="50"></center> -->
<div class="gr_radio_box">
  <input class="radio_box" type="radio" name="silde" checked>
  <input class="radio_box" type="radio" name="silde" value="DIV_2">
  <input class="radio_box" type="radio" name="silde">
  <input class="radio_box" type="radio" name="silde">
  <input class="radio_box" type="radio" name="silde">
</div>

    
<!-- ==========================================END BOOKING=========================================== -->
</form>
</body>
</html>
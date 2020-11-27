# Viet_Han_DenTal
App đặ lịch khám online cho phòng khám Nha Khoa Việt Hàn VIETHANDENTAL
User (Mobile)
Admin(Website)


=====================CÔNG VIỆC ĐÃ HOÀN THÀNH============================
-Phân quyền:
	+ Member(nhân viên)
	+ Doctor(Bác Sĩ)
	+ Admin
	
-Giao diện:
	+ Admin
		.Thông tin nhân viên
	+ Form Đăng kí khám
		. Điền thông tin cá nhân( chưa bắt sự kiện rỗng)
		. Danh sách sách vấn đê yêu cầu phải chọn ,hiện được danh sách bác sĩ thuộc bộ phận vấn đề mà người đăng kí gặp phải	(chưa xuất được dữ liệu của bác sĩ trong csdl)(Đ ANG LÀM)
-File xử lý dữ liệu
	+ Role
	+ AdapterNhanVien() -> xuất thông tin nhân viên
	+ Logout

=================== CẦN LÀM SẮP TỚI======================================
-Giao Diện
	+ Admin
		.Thông tin bác sĩ
	+ Form Đăng kí khám
		. Hiện được danh sách bác sĩ tùy theo lựa chọn vấn đề mắc phải của người đăng kí.
		. Sau khi hiện được list bác sĩ- > người dùng chọn bác sĩ nào thì -> hiện danh sách các gói trị liệu của bác sĩ đó và khung giờ trống còn lại của bác sĩ(Yêu cầu làm giống Calender)
		. Sau khi chọn lụa các gói trị liệu phù hợp -> hiện tổng giá tiền -> tổng thời gian để thực hiện các gói trị liệu (ví dụ có  3 gói trị liệu( A B C) thì sẽ có 6 phương án cho khách - > A, B, C, AB, BC, AC, mỗi cái sẽ có giá tiền khác nhau (Dùng Javascript bắt event và PhP để fetch_data từ csdl với các gói trị liệu người dùng yêu cầu))

===============================CSDL TEST===================================
bỏ cái project colne về vo htdocs của Xampp 

tên databse : nhakhoa -> import file .sql vào 

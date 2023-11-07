<?php
$thongbao = ''; // Khởi tạo biến thông báo lỗi

if (isset($_POST['dangky'])) { // Kiểm tra nút đăng ký đã được nhấn hay chưa
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Kiểm tra xem bất kỳ ô input nào bị trống
    if (empty($email) || empty($user) || empty($pass)) {
        $thongbao = 'Vui lòng điền đầy đủ thông tin.';
    } else {
        // Xử lý đăng ký thành viên ở đây nếu thông tin đầy đủ
    }
}
?>
<div class="row mb">
            <div class="boxtrai mr">
            <div class="row mb">
                    <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
                    <div class="row boxcontent formtaikhoan dangky">
                     <form action="index.php?act=dangky" method="POST">
                        <div class="form-dangky">
                        <label for="#">Email:</label><br>
                        <input type="email" name="email" class="text-dangky"><br><br>
                        <label for="#">Tên:</label><br>
                        <input type="text" name="user" class="text-dangky"><br><br>
                        <label for="#">Mật khẩu:</label><br>
                        <input type="password" name="pass" class="text-dangky"><br><br>
                        <input type="submit" name="dangky" id="" value="Đăng ký">
                        <input type="reset" id="" value="Nhập lại">
                        </div>
                     </form>
                     <p class="thongbao">
                     <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }

                     ?>
                     </p>
                    </div>
                
            </div>
            </div>
        
            <div class="boxphai ">
            <?php 
                    include 'view/boxright.php';
                ?>
            </div>
        </div>
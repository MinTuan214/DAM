<?php 
    if(is_array($taikhoan)){
        extract($taikhoan);
    } 
    $img='';
    $hinhpath ="../upload/" .$img;
    if(is_file($hinhpath)){
        $hinhpath = "<img src='". $hinhpath."' height = '100'>";
    }else{
        $hinhpath = "Không có hình";
    }
    $thongbao ="";
 
                   
?>
<div class="artical">
    <div class="add"><h2>CẬP NHẬT KHÁCH HÀNG</h2></div>
    <form action="index.php?act=updatetk" method="POST">
        <div class="form-text">
            <div class="model">
                <div class="maloai-text">
                    <label for="">Mã tài khoản: <?=$id?></label><br><br>
                </div>
                <div class="maloai-text">
                    <label for="">Tên đăng nhập:</label><br>
                    <input type="text" name="user" class="input-text" value="<?=$user?>">
                </div>
                <div class="maloai-text">
                    <label for="">Mật khẩu:</label><br>
                    <input type="text" name="pass" class="input-text" value="<?=$pass?>">
                </div>
                <div class="maloai-text">
                    <label for="">Email:</label><br>
                    <input type="text" name="email" class="input-text" value="<?=$email?>">
                </div>
                <div class="maloai-text">
                    <label for="">Địa chỉ:</label><br>
                    <input type="text" name="address" class="input-text" value="<?=$address?>">
                </div>
                <div class="maloai-text">
                    <label for="">Điện thoại:</label><br>
                    <input type="text" name="tel" class="input-text" value="<?=$tel?>">
                </div>
                <div class="maloai-text">
                <label for="">Hình:</label><br>
                        <?=$hinhpath?><br>
                        <input type="file" name="hinh" class="input-text">
                </div>
                <div class="maloai-text">
                    <label for="">Vai trò:</label><br>
                    <label>
                        <input type="radio" name="role" value="0" <?= ($role == 0) ? 'checked' : '' ?>> Khách hàng
                    </label>
                    <label>
                        <input type="radio" name="role" value="1" <?= ($role == 1) ? 'checked' : '' ?>> Quản lý
                    </label>
                </div>
                <div class="thong-bao"><?php echo $thongbao; ?></div>
                <div class="button-maloai">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listkh"><input type="button" value="Danh sách"></a>
                </div>
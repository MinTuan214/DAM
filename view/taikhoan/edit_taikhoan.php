<div class="row mb">
            <div class="boxtrai mr">
            <div class="row mb">
                    <div class="boxtitle">Cập nhật tài khoản</div>
                    <div class="row boxcontent formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                extract($_SESSION['user']);

                            }
                        ?>
                     <form action="index.php?act=edit_taikhoan" method="post">
                        <label for="#">Email:</label><br>
                        <input type="email" name="email" value="<?=$email?>"><br><br>
                        <label for="#">Tên:</label><br>
                        <input type="text" name="user" value="<?=$user?>"><br><br>
                        <label for="#">Mật khẩu:</label><br>
                        <input type="password" name="pass" value="<?=$pass?>"><br><br>
                        <label for="#">Địa chỉ:</label><br>
                        <input type="text" name="address" value="<?=$address?>"><br><br>
                        <label for="#">Số điện thoại:</label><br>
                        <input type="text" name="tel" value="<?=$tel?>"><br><br>

                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" id="" value="Cập nhật">
                        <input type="reset" id="" value="Nhập lại">
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
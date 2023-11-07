<div class="row mb">
            <div class="boxtrai mr">
            <div class="row mb">
                    <div class="boxtitle">QUÊN MẬT KHẨU</div>
                    <div class="row boxcontent formtaikhoan">
                     <form action="index.php?act=quenmk" method="post">
                        <label for="#">Email:</label><br>
                        <input type="email" name="email" id=""><br><br>
        
                        <input type="submit" name="guiemail" value="Gửi">
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
<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle">
                <?= $name ?>
            </div>
            <div class="row boxcontent">
                <?php
                $img = $img_path . $img;
                echo '<div class="containerctsp">
                <div class="box">
                <div class="hinhanhctsp">
                    <img src="'.$img.'" alt="">
                </div>
                <div class="boxctsp">
                    <div class="tenctsp">
                        '.$name.'
                    </div>
                    <div class="gia">
                        ₫'.number_format($price, 0, ',', '.').'
                    </div>
                    <div class="mau">
                        <div class="tieude">Màu sắc</div>
                        <div class="button-mau">
                            <input type="button" name="" id="" value="TRẮNG">
                            <input type="button" name="" id="" value="XANH LÁ">
                            <input type="button" name="" id="" value="XANH DƯƠNG">
                            <input type="button" name="" id="" value="ĐEN">
                        </div>
                    </div>
                    <div class="buttonctsp">
                        <div class="themgiohang"><i class="fa-solid fa-cart-plus"></i> Thêm vào giỏ hàng</div>
                        <input type="submit" name="" class="muangay" value="Mua ngay">
    
                    </div>
                </div>
            </div>
            </div>';
                echo '<p class="mota-prduct">MÔ TẢ SẢN PHẨM:</p>';
                echo '<div class="mota">' . nl2br($mota) . '</div>';
                ?>
            </div>  
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                    $("#binhluan").load("view/binhluan/binhluanform.php", { idpro: <?=$id?> });
                });
        </script>

        <div class="row " id="binhluan">
            
        </div>

        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <?php
                foreach ($spcl as $sp) {
                    extract($sp);
                    $img = $img_path . $img;
                    $linksp = "index.php?act=sanphamct&idsp= " . $id;
                    echo'<div class="boxsp-bot">
                            <div class="hinhanh-bot">
                            <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                            </div>
                            <div class="title-bot">
                                <a href="'.$linksp.'">'.$name.'</a>
                            </div>  
                            <div class="price-bot">
                                <p class="price-product-bot">₫'.number_format($price, 0, ',', '.').'</p>
                                <p class="daban-bot">Đã bán: 16</p>
                            </div>
                        </div>';;
                }
                ?>
            </div>
        </div>
    </div>

    <div class="boxphai">
        <?php
        include 'boxright.php';
        ?>
    </div>
</div>
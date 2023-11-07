<?php 
    $thongbao='';
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath ="../upload/" .$img;
        if(is_file($hinhpath)){
            $hinhpath = "<img src='". $hinhpath."' height = '100'>";
        }else{
            $hinhpath = "Không có hình";
        }
?>

<div class="artical">
            <div class="add"><h2>CẬP NHẬT SẢN PHẨM</h2></div>
            <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="form-text">
                <div class="model">
                <select name="iddm">
                    <option value="0" selected >Tất cả</option>
                    <?php 
                        foreach ($listloaihang as $key=>$value){
                            // extract($danhmuc);
                            if($iddm==$value['id']){
                                echo '<option value='.$value['id'].' selected >'.$value['name'].'</option>';
                            }else{
                                echo '<option value='.$value['id'].'>'.$value['name'].'</option>';
                            }
                            
                        }
                    ?>
                </select>
                    <div class="maloai-text">
                        <label for="">Mã sản phẩm: <?=$id?></label><br><br>
                        <!-- <input type="text" name="masp" disabled class="input-text" > -->
                    </div>
                    <div class="maloai-text">
                        <label for="">Tên sản phẩm:</label><br>
                        <input type="text" name="tensp" class="input-text" value="<?=$name?>">
                    </div>
                    <div class="maloai-text">
                        <label for="">Giá:</label><br>
                        <input type="text" name="giasp" class="input-text" value="<?=$price?>">
                    </div>
                    <div class="maloai-text">
                        <label for="">Hình:</label><br>
                        <?=$hinhpath?><br>
                        <input type="file" name="hinh" class="input-text">
                    </div>
                    <div class="maloai-text">
                        <label for="">Mô tả:</label><br>
                        <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
                    </div>


                    <?php echo $thongbao ?>
                    <div class="button-maloai">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script src="./js/index.js"></script>
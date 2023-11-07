<?php 
    if(is_array($lh)){
        extract($lh);
    }
?>

<div class="artical">
            <div class="add"><h2>CẬP NHẬT LOẠI HÀNG</h2></div>
            <form action="index.php?act=updatelh" method="POST">
            <div class="form-text">
                <div class="model">
                    <div class="maloai-text">
                        <label for="">Mã loại: <?=$id?></label><br><br>
                    </div>
                    <div class="maloai-text">
                        <label for="">Tên loại:</label><br>
                        <input type="text" name="tenloai" class="input-text" value="<?=$name?>">
                    </div>
                    
                    <div class="button-maloai">
                        <input type="hidden" name="id" value="<?=$id ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listlh"><input type="button" value="Danh sách"></a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script src="./js/index.js"></script>
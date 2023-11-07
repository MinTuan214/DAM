<div class="artical">
            <div class="add"><h2>THÊM MỚI SẢN PHẨM</h2></div>
            <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="form-text">
                <div class="model">
                    <div class="maloai-text">
                        <label for="">Danh mục:</label><br>
                        <select name="iddm">
                            <?php 
                                foreach ($listloaihang as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value=" ' .$id. ' ">' .$name.'</option>';
                                }
                            ?>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="maloai-text">
                        <label for="">Tên sản phẩm:</label><br>
                        <input type="text" name="tensp" class="input-text">
                    </div>
                    <div class="maloai-text">
                        <label for="">Giá:</label><br>
                        <input type="text" name="giasp" class="input-text">
                    </div>
                    <div class="maloai-text">
                        <label for="">Hình:</label><br>
                        <input type="file" name="hinh" class="input-text">
                    </div>
                    <div class="maloai-text">
                        <label for="">Mô tả:</label><br>
                        <textarea name="mota" id="mota" cols="30" rows="10"></textarea>
                    </div>


                    <?php echo $thongbao ?>
                    <div class="button-maloai">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script src="./js/index.js"></script>
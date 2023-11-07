<div class="artical"> 
            <div class="add"><h2>DANH SÁCH SẢN PHẨM</h2></div>
            <form action="index.php?act=listsp" method="post">
                
                <select name="iddm" class="list">
                    <option value="0" select>Tất cả</option>
                    <?php 
                        foreach ($listloaihang as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value=" ' .$id. ' ">' .$name.'</option>';
                        }
                    ?>
                </select>
                <input type="text" name="kyw" class="search" placeholder="Tìm kiếm...">
                <input type="submit" name="listok" class="input_search" value="Search" >
            </form>
            <table border="1">
                <tr class="first-table">
                    <th class="title-id"><input type="checkbox" name="" id=""></th>
                    <th class="title-table">Mã sản phẩm</th>
                    <th class="title-table text">Tên sản phẩm</th>
                    <th class="title-table">Hình</th>
                    <th class="title-table">Giá</th>
                    <th class="title-table">Lượt xem</th>
                    <th class="title-table">Edit</th>
                    <th class="title-table">Delete</th>
                </tr>
               <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $editsp = "index.php?act=editsp&id=".$id;
                    $deletesp = "index.php?act=deletesp&id=".$id;
                    $hinhpath ="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinh = "<img src='". $hinhpath."' height = '80'>";
                    }else{
                        $hinh = "Không có hình";
                    }
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' .$id. '</td>
                            <td>' .$name. '</td>
                            <td>' .$hinh. '</td>
                            <td>₫'.number_format($price, 0, ',', '.').'</td>
                            <td>' .$luotxem. '</td>
                            <td><a href="'.$editsp.'"</a><i class="fa-solid fa-pencil"></i> Edit</td>
                            <td><a href="'.$deletesp.'"</a><i class="fa-solid fa-trash-can"></i> Delete</td>
                        </tr>';
                }
               ?>
            </table>
            <div class="button-maloai">
                        <input type="button" value="Chọn tất cả">
                        <input type="reset" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div>
        </div>
        <script src="./js/index.js"></script>
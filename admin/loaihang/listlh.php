<div class="artical">
            <div class="add"><h2>DANH SÁCH LOẠI HÀNG</h2></div>
            <table border="1">
                <tr class="first-table">
                    <th class="title-id"><input type="checkbox" name="" id=""></th>
                    <th class="title-table">Mã loại</th>
                    <th class="title-table">Tên loại</th>
                    <th class="title-table">Edit</th>
                    <th class="title-table">Delete</th>
                </tr>
               <?php
                foreach ($listloaihang as $loaihang) {
                    extract($loaihang);
                    $edit = "index.php?act=edit&id=".$id;
                    $delete = "index.php?act=delete&id=".$id;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' .$id. '</td>
                            <td>' .$name. '</td>
                            <td><a href="'.$edit.'"</a><i class="fa-solid fa-pencil"></i> Edit</td>
                            <td><a href="'.$delete.'"</a><i class="fa-solid fa-trash-can"></i> Delete</td>
                        </tr>';
                }
               ?>
            </table>
            <div class="button-maloai">
                        <input type="button" value="Chọn tất cả">
                        <input type="reset" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addlh"><input type="button" value="Nhập thêm"></a>
                    </div>
        </div>
        <script src="./js/index.js"></script>
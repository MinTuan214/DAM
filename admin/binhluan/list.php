<div class="artical">
            <div class="add"><h2>DANH SÁCH TÀI KHOẢN</h2></div>
            <table border="1">
                <tr class="first-table">
                    <th class="title-id"><input type="checkbox" name="" id=""></th>
                    <th class="title-table">ID</th>
                    <th class="title-table">Nội dung bình luận</th>
                    <th class="title-table">User</th>
                    <th class="title-table">Idpro</th>
                    <th class="title-table">Ngày bình luận</th>

                    <th class="title-table">Delete</th>
                </tr>
               <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $deletebl = "index.php?act=deletebl&id=".$id;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' .$id. '</td>
                            <td>' .$noidung. '</td>
                            <td>' .$username. '</td>
                            <td>' .$idpro. '</td>
                            <td>' .$ngaybinhluan. '</td>
                      
                            <td><a href="'.$deletebl.'"</a><i class="fa-solid fa-trash-can"></i> Delete</td>
                        </tr>';
                }
               ?>
            </table>
            <!-- <div class="button-maloai">
                        <input type="button" value="Chọn tất cả">
                        <input type="reset" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addlh"><input type="button" value="Nhập thêm"></a>
                    </div>
        </div> -->
        <script src="./js/index.js"></script>
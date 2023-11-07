<div class="artical">
            <div class="add"><h2>DANH SÁCH TÀI KHOẢN</h2></div>
            <table border="1">
                <tr class="first-table">
                    <th class="title-id"><input type="checkbox" name="" id=""></th>
                    <th class="title-table">Mã tài khoản</th>
                    <th class="title-table">Tên đăng nhập</th>
                    <th class="title-table">Mật khẩu</th>
                    <th class="title-table">Email</th>
                    <th class="title-table">Địa chỉ</th>
                    <th class="title-table">Điện thoại</th>
                    <th class="title-table">Vai trò</th>

                    <th class="title-table">Edit</th>
                </tr>
               <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $edittk = "index.php?act=edittk&id=" .$id;
                    $deletetk = "index.php?act=deletetk&id=".$id;
                    $roleText = ($role == 1) ? "Quản trị" : "Khách hàng";

                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' .$id. '</td>
                            <td>' .$user. '</td>
                            <td>' .$pass. '</td>
                            <td>' .$email. '</td>
                            <td>' .$address. '</td>
                            <td>' .$tel. '</td>
                            <td>' .$roleText. '</td>
                            <td><a href="'.$edittk.'"</a><i class="fa-solid fa-pencil"></i> Edit</td>
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
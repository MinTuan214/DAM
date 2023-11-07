<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include 'header.php';
    //controller

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            //Loại hàng
            case 'addlh':
                $thongbao ="";
                //Kiểm tra xem người dùng có ấn vào nút add hay không 
                if(isset($_POST['submit'])&&($_POST['submit'])){
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
                
                include 'loaihang/add.php';
                break;
            case 'listlh':
                $listloaihang = loadAll_danhmuc();
                include 'loaihang/listlh.php';
                break;
            case 'delete':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listloaihang = loadAll_danhmuc();
                include 'loaihang/listlh.php';
                break;
            case 'edit':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $lh = loadone_danhmuc($_GET['id']);
                }  
                include 'loaihang/update.php';
                break;

            case 'updatelh':
                $thongbao ="";
                //Kiểm tra xem người dùng có ấn vào nút add hay không 
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhật thành công";
                }
                $listloaihang = loadAll_danhmuc();
                include 'loaihang/listlh.php';
                break;

                //Sản phẩm
                case 'addsp':
                    $thongbao ="";
                    //Kiểm tra xem người dùng có ấn vào nút add hay không 
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                            // echo "The file" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "has been upload.";
                        }else{
                            // echo "Sorry";
                        }

                        insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                        $thongbao = "Thêm thành công";
                    }
                    $listloaihang = loadAll_danhmuc();
                    include 'sanpham/addsp.php';
                    break;
                case 'listsp':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $kyw = $_POST['kyw'];
                        $iddm = $_POST['iddm'];
                    }else{
                        $kyw = '';
                        $iddm = 0;
                    }
                    $listloaihang = loadAll_danhmuc();
                    $listsanpham = loadAll_sanpham($kyw, $iddm);
                    include 'sanpham/listsp.php';
                    break;
                case 'deletesp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham = loadAll_sanpham("", 0);
                    include 'sanpham/listsp.php';
                    break;
                case 'editsp':
                    if(isset($_GET['id']) && ($_GET['id'])>0){
                        $sanpham = loadone_sanpham($_GET['id']);
                    }
                    $listloaihang = loadAll_danhmuc();
                    include 'sanpham/update.php';
                    break;
    
                case 'updatesp':
                    $thongbao ="";
                    //Kiểm tra xem người dùng có ấn vào nút add hay không 
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        $hinh = $_FILES['hinh']['name'];
                        $iddm = $_POST['iddm'];
                        $id = $_POST['id'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                            // echo "The file" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "has been upload.";
                        }else{
                            // echo "Sorry";
                        }
                        update_sanpham($id ,$tensp,$giasp,$mota,$hinh,$iddm);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listloaihang = loadAll_danhmuc();
                    $listsanpham = loadAll_sanpham("", 0);
                    include 'sanpham/listsp.php';
                    break;
                    case 'edittk':
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            $id = $_GET['id'];
                            $taikhoan = loadone_taikhoan($id);
                        }
                        include 'taikhoan/updatetk.php';
                        break;
            
                    case 'updatetk':
                        if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                            $id = $_POST['id'];
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            $tel = $_POST['tel'];
                            $role = $_POST['role'];
                            
                            // Thực hiện kiểm tra và cập nhật tài khoản
                            if (update_taikhoan($id, $user, $pass, $email, $address, $tel, $role)) {
                                $thongbao = "Cập nhật thành công";
                            } else {
                                $thongbao = "Cập nhật không thành công";
                            }
                        }
                        $listtaikhoan = loadAll_taikhoan();
                        include 'taikhoan/list.php';
                        break;

                case 'listkh':
                    $listtaikhoan = loadAll_taikhoan();
                    include 'taikhoan/list.php';
                    break;
                case 'listbl':
                    $listbinhluan = loadAll_binhluan(0);
                    include 'binhluan/list.php';
                    break;
                case 'deletebl':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id = $_GET['id'];
                        delete_binhluan($id);
                    }
                    $listbinhluan = loadAll_binhluan(0);
                    include 'binhluan/list.php';
                    break;
                   
                case 'thongke':
                    $listthongke = loadAll_thongke();
                    include 'thongke/list.php';
                    break;
                 case 'bieudo':
                    $listthongke = loadAll_thongke();
                    include 'thongke/bieudo.php';
                    break;
            default:
                include 'home.php';
                break;
        }
    }else{
        include 'home.php';
    }


    
    include 'footer.php';
?>

<?php
    session_start(); 
    include 'model/pdo.php';
    include 'model/sanpham.php';
    include 'model/danhmuc.php';
    include './view/header.php';
    include 'model/taikhoan.php';
    include 'global.php';

    $spnew = loadAll_sanpham_home();
    $dslh = loadAll_danhmuc();
    $dstop10 =loadAll_sanpham_top10();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act = $_GET['act'];	
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw ="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm = $_GET['iddm'];
                    
                }else{
                    $iddm = 0;
                }
                $dssp = loadAll_sanpham($kyw, $iddm);
                $tendm = load_tendm($iddm);
                include 'view/sanpham.php';
                break;
            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $spcl = loadone_sanpham_cungloai($id, $iddm);
                    include 'view/sanphamct.php';
                }else{
                    include 'view/home.php';
                }
                
                break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    insert_taikhoan($email, $user, $pass);
                    $thongbao = "Đã đăng ký thành công";
                }
                include 'view/taikhoan/dangky.php';
                break;
          case 'dangnhap':
                    $pass ='';
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){       
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user'] = $checkuser;
                        // $thongbao = "Đã đăng nhập thành công";
                        header('Location: index.php');
                        
                    }else{
                        $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại";
                    }
                    
                }
                include 'view/taikhoan/dangky.php';
                break; 
            case 'edit_taikhoan':
                    $pass ='';
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){       
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];

                    update_taikhoan($id, $user, $pass, $email, $address, $tel, $role);
                    $_SESSION['user'] = checkuser($user,$pass);
                    header('Location: index.php?act=edit_taikhoan');         
                }
                include 'view/taikhoan/edit_taikhoan.php';
                break;  

            case 'quenmk':
                    $pass ='';
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){       
                    $email = $_POST['email'];
                    
                    $checkemail = checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        $thongbao = "Email này không tồn tại";
                    }  
                }
                include 'view/taikhoan/quenmk.php';
                break; 
              case 'thoat':
                session_unset();
                header('Location: index.php');
                include 'view/gioithieu.php';
                break;                       
            case 'gioithieu':
                include 'view/gioithieu.php';
                break;
            case 'lienhe':
                include 'view/lienhe.php';
                break;
            default:
                include './view/home.php';
                break;
        }
    }else{
        include './view/home.php';
    }

    
    include './view/footer.php';
?>
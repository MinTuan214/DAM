
<?php 
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";

    $idpro = $_REQUEST['idpro'];
    $dsbl = loadAll_binhluan($idpro);
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $thongbaocmt = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<div class="row mb">
                    <div class="row mb">
                        <div class="boxtitle">BÌNH LUẬN</div>
                        <div class="boxfooter searchbox">
                        <?php
                            
                            if(isset($_SESSION['user'])&&!empty($_SESSION['user'])) {
                                // Hiển thị ô viết bình luận và nút gửi bình luận
                                $thongbao="";
                                echo '
                                    <form action="' . $_SERVER['PHP_SELF'] . '" method="post">
                                        <input type="hidden" name="idpro" value="' . $idpro . '">
                                        <label for="#">Viết bình luận...<i class="fa-solid fa-pen"></i></label>
                                        <input type="text" name="noidung" class="noidung"><br>
                                        <input type="submit" name="guibinhluan" class="submit_cmt" value="Gửi">
                                    </form>
                                ';
                            } else {
                                // Hiển thị thông báo hoặc đưa họ đến trang đăng nhập
                                echo '<span class="thongbao">Bạn cần phải <a href="index.php">Đăng nhập</a> để bình luận.</span>';
                            
                            }
                ?>
                        
                        </div>
                        <div class="boxcontent2 menudoc">
                        <ul>
                        <table class="cmt">
                                <?php 
                                    foreach ($dsbl as $bl) {
                                        extract($bl);
                                        echo
                                            '<tr>
                                                    <th class = "username">'.$username.' <span class="date">'.$ngaybinhluan.'</span></th>
                                            </tr>
                                            <tr>
                                                    <td class="noidung_cmt" >'.$noidung.'</td>
                                            </tr>
                                            <tr>
                                                    <td class="icon-cmt" ><i class="fa-regular fa-thumbs-up"></i> 0 <span class="traloi">Trả lời</span> 0</td>
                                            </tr>';

                                    }
                                
                            
                                    
                                    
                                ?>
                                
                        </table>
                            </ul>
                        </div>
                        
                        <?php
                        if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
                            $noidung = trim($_POST['noidung']); // Loại bỏ khoảng trắng dư thừa
                        
                            if (empty($noidung)) {
                                $thongbaocmt = '';
                                // Nếu người dùng không nhập nội dung, hiển thị thông báo lỗi
                                echo "Bạn chưa nhập nội dung bình luận.";

                            }else {
                                // Người dùng đã nhập nội dung, tiến hành xử lý việc gửi bình luận
                                $idpro = $_POST['idpro'];
                                $iduser = $_SESSION['user']['id'];
                                $ngaybinhluan = date("H:i:s d/m/Y");
                                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                                header("location: ".$_SERVER['HTTP_REFERER']);
                            }
                            
                        }
                            
                        ?>
                    </div>
                </div>
                </body>
</html>
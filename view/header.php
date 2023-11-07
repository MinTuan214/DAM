<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-Shop</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="boxcenter">
        <div class="row mb header">
            <a class="x-shop-a" href="index.php"><h1 class="x-shop"><i class="fa-brands fa-apple"></i> X-SHOP</h1></a>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house"></i> Trang Chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên Hệ</a></li> |
                <?php          
                $dslh = loadAll_danhmuc();    
                    foreach ($dslh as $lh) {
                        extract($lh);
                        $linklh ="index.php?act=sanpham&iddm=".$id;
                        echo '<li><a href="'.$linklh.'">'.$name.'</a></li>';
                        }
                     ?>
            </ul>
        </div>
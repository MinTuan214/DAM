<div class="row mb">
            <div class="boxtrai mr">
            <div class="row mb">
                
                    <div class="boxtitle">SẢN PHẨM: <strong><?=$tendm?></strong></div>
                    <div class="row boxcontent">
                        <?php        
                            $i=0;            
                           foreach ($dssp as $sp) {
                            extract($sp);
                            $linksp ="index.php?act=sanphamct&idsp=".$id;
                            $hinh = $img_path.$img;
                            if(($i==2)||($i==5)||($i==8)||($i==11)){
                                    $mr="";
                            }else{
                                    $mr="mr";
                            }
                            echo '<div class="boxsp">
                                    <div class="hinhanh">
                                        <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                                    </div>
                                    <div class="title">
                                        <a href="'.$linksp.'">'.$name.'</a>
                                    </div>  
                                    <div class="price">
                                        <p class="price-product">₫'.number_format($price, 0, ',', '.').'</p>
                                        <p class="daban">Đã bán: 16</p>
                                    </div>
                                </div>';
                                $i++;
                                }
                        ?>  
                    </div>
            </div>
            
            </div>
            <div class="boxphai ">
            <?php 
                    include 'boxright.php';
                ?>
            </div>
        </div>
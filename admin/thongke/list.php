<div class="artical">
            <div class="add"><h2>THỐNG KÊ SẢN PHẨM THEO LOẠI</h2></div>
            <table border="1">
                <tr class="first-table">
                    <th class="title-table">Mã danh mục</th>
                    <th class="title-table">Loại hàng</th>
                    <th class="title-table">Số lượng</th>
                    <th class="title-table">Giá cao nhất</th>
                    <th class="title-table">Giá thấp nhất</th>
                    <th class="title-table">Giá trung bình</th>
                </tr>
                <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo '<tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>₫'.number_format($maxprice, 0, ',', '.').'</td>
                            <td>₫'.number_format($minprice, 0, ',', '.').'</td>
                            <td>₫'.number_format($avgprice, 0, ',', '.').'</td>
                        </tr>';
                    }
                ?>
            
            </table>
            <script src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        const data = google.visualization.arrayToDataTable([
                            ['Loại hàng', 'Số lượng'],
                            <?php
                            foreach ($listthongke as $thongke) {
                                extract($thongke);
                                echo "['".$tendm."', ".$countsp."],";
                            }
                            ?>
                        ]);

                        const options = {
                            'title': 'BIỂU ĐỒ THỐNG KÊ SẢN PHẨM THEO LOẠI HÀNG','width':600, 'height':400 
                        };

                        const chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                    }
                    </script>
                    <div class="row">
                        <div id="piechart"></div>
                    </div>
            <!-- <div class="button-maloai">
                        <input type="button" value="Chọn tất cả">
                        <input type="reset" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addlh"><input type="button" value="Nhập thêm"></a>
                    </div>
        </div> -->
        <script src="./js/index.js"></script>
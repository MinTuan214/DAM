
<div class="row">
    <div id="piechart"></div>
</div>
<script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
    <?php
        foreach ($listthongke as $thongke) {
            extract($thongke);
            echo "['".$tendm."', ".$countsp."],";
        }
        ?>
]);

// Set Options
const options = {
  title:'World Wide Wine Production',
  is3D:true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>

<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    <div class="row " >
    <div class="tk_content">

    <div class="title" style="margin-left:180px ">
        <h1 >BIỂU ĐỒ THỐNG KÊ</h1>
    </div>
    <div
        id="myChart" style="width:100%; max-width:600px; height:500px;">
    </div>

    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Contry', 'Mhl'],
        <?php
                $tongdm=count($listthongke);
                $i=1;
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    if($i==$tongdm){
                        $dauphay="";
                    }else{
                        $dauphay=",";
                    }
                    echo" ['".$thongke['tendm']."',".$thongke['countsp']."]".$dauphay;
                    $i+=1;
                }
        ?>
        
        ]);

        var options = {
        title:'Biểu dầu danh mục sản phẩm','width':1100,'height':800
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
        }
    </script>
    </div>
</div>
</body>
</html>




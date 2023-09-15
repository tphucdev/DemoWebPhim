<div class="row">
    <div class="tk_content tk_content_trangchu" style="margin-left:10px">

        <div class="title title-tk title-trangchu">
            <h1>TRANG CHỦ</h1>
        </div>
        <div class="main">
            <div class="home_sp_moi">
                <div class="home_sp_moi_title">
                    <span>SẢN PHẨM MỚI</span>
                </div>
                <div class="home_sp_moi_nd">
    
                </div>
            </div>
            <div class="home_sp_moi">
                <div class="home_sp_moi_title">
                    <span>SẢN PHẨM XEM NHIỀU</span>
                </div>
                <div class="home_sp_moi_nd">
    
                </div>
            </div>
        </div>
        <div class="main">
            <div class="home_sp_moi">
                <div class="home_sp_moi_title">
                    <span>BÌNH LUẬN MỚI</span>
                </div>
                <div class="home_sp_moi_nd">
    
                </div>
            </div>
            <div class="home_sp_moi">
                <div class="home_sp_moi_title">
                    <span>ĐƠN HÀNG MỚI</span>
                </div>
                <div class="home_sp_moi_nd">
    
                </div>
            </div>
        </div>


        <div class="main">
            <div class="home_sp_moi home_sp_moi_bieudo">
                <div class="home_sp_moi_title">
                    <span>BIỂU ĐỒ THỐNG KÊ SẢN PHẨM THEO DANH MỤC</span>
                </div>
                <!DOCTYPE html>
                <html>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                <body>
                    <div class="row " >
                    <div class="tk_content">

                    
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
                                $listthongke=loadall_thongke();
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
                        title:'Biểu dầu danh mục sản phẩm','width':1100,'height':500
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                        chart.draw(data, options);
                        }
                    </script>
                    </div>
                </div>
                </body>
                </html>

                </div>
            </div>
           
        </div>
    </div>
</div>


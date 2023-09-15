<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">    
    <link rel="stylesheet" href="../CSS/responsive.css">
</head>
<body> -->
    
<div class="grid wide">
<div class="row giohang_modify-thongtindathang-item">
    <div class="giohang_modify giohang_modify-thongtindathang giohang_modify-mydonhang"  style="margin-top: 16%;">

        <div class="title_giohang">
            <h1>ĐƠN HÀNG CỦA BẠN</h1>
        </div>
        <div class="content_item_giohang content_item_giohang-donhangmy">
           <div class="loai loai-mydonhang">
                <table border="1" style="width: 95%; border-collapse: collapse;">
                    <tr style="background-color:#999 ;">
                        <th></th>
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Số lượng mặt hàng</th>
                        <th>Tổng giá trị đơn hàng</th>
                        <th>Tình trạng đơn hàng</th>
                        <th></th>
                    </tr > 
                    
                    <?php
                        if(is_array($listbill)){
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $countsp=loadall_cart_count($bill['id']);
                                $ttien=$countsp*$bill['total'];
                                $ttdh=get_ttdh($bill['bill_status']);
                                echo'
                                <tr style="height: 60px;">
                                <td></td>
                                <td></td>
                                    <td>DAM-'.$bill['id'].'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$ttien.'đ</td>
                                    <td>'.$ttdh.'</td>
                                </tr>
                                ';
                            }
                        }else{
                            echo"Hiện tại chưa có đơn hàng";
                        }
                    
                    ?>
                </table>

                

           </div>
          
        </div>
       
    </div>
</div>
</div>
</body>
</html>
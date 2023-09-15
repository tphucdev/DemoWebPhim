<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
</head>
<body>
    
<div class="grid wide">
    <div class="row row_giohang" >
        <form action="index.php?act=billcomfirm" method="post">

            <div class="giohang_modify giohang_modify-thongtindathang " style="margin-top:200px ;">
                <div class="title_giohang">
                    <h1>CẢM ƠN</h1>
                </div>
                <div class="content_item_giohang giohang_camon">
                    <P>Cảm ơn quý khách đã đặt hàng!!</P>
                </div>
            </div>   
            <?PHP
                
                if(isset($bill) && (is_array($bill))){
                    extract($bill);
                    $pttt=get_pttt($bill['bill_pttt']);
                }
                $mdh=rand(00,99);
            ?>
            
            <div class="giohang_modify giohang_modify-thongtindathang">
                <div class="title_giohang">
                    <h1>THÔNG TIN ĐƠN HÀNG </h1>
                </div>
                <div class="content_item_giohang">
                    <div class="loai input_thanhtoan-ttdonhang ">
                        <div class="input_thanhtoan">
                            <div class="input_tienmat inputthanhtoan-item">
                               Mã đơn hàng: DAM-<?=$bill['id'];?>
                            </div>
                            <div class="input_bank inputthanhtoan-item">
                               Ngày đặt hàng: <?=$bill['ngaydathang'];?>
                            </div>
                            <div class="input_bank inputthanhtoan-item">
                               Tổng đơn hàng: <?=$bill['total'];?>
                            </div>
                            <div class="input_bank inputthanhtoan-item">
                               Phương thức thanh toán: <?=$pttt;?> 
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="giohang_modify giohang_modify-thongtindathang " >
                <div class="title_giohang">
                    <h1>THÔNG TIN ĐẶT HÀNG</h1>
                </div>
                <div class="content_item_giohang content_item_giohang-thongtin">
                    <table style="border-collapse: collapse;">
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><?=$bill['bill_name'];?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?=$bill['bill_address'];?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?=$bill['bill_email'];?></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><?=$bill['bill_tel'];?></td>
                        </tr>
                    </table>
                </div>
            </div>   

            <div class="giohang_modify giohang_modify-thongtindathang">
                <div class="title_giohang">
                    <h1>CHI TIẾT GIỎ HÀNG</h1>
                </div>
                <div class="content_item_giohang">
                    <div class="loai loai-chitietgiohang">
                        <table border="1" style="width: 95%; border-collapse: collapse;">
                            <tr>
                                <th>STT</th>
                                <th>Hình</th>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th></th>
                            </tr>
                            <?php
                              bill_chi_tiet($billct);
                            ?>
                        </table>
                    </div>
                </div>
             
            </div>
        </form>






    </div>
</div>
</body>
</html>
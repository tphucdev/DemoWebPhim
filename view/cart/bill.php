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
                    <h1>THÔNG TIN ĐẶT HÀNG</h1>
                </div>
                <div class="content_item_giohang">
                    <div class="loai loai_ttdathang">
    
                        <table style="width: 100%;">
                            <div class="thongtindathang-title">
                                <?php
                                    if(isset($_SESSION['user'])){
                                        $name=$_SESSION['user']['user'];
                                        $address=$_SESSION['user']['address'];
                                        $email=$_SESSION['user']['email'];
                                        $tel=$_SESSION['user']['tel'];
                                    }else{
                                        $name="";
                                        $address="";
                                        $email="";
                                        $tel="";
                                    }
                                ?>
    
                            
                            <div class="thongtindathang_data">
                                <tr style="margin-bottom: 14px; font-size:26px;">
                                    <td style="text-align: left;">Người đặt hàng</td>
                                    <div class="ttdathang_icon"></div>
                                    <td>
                                        <i class="fa-solid fa-user icon_dathang"></i>
                                        <input type="text" name="name" value="<?=$name?>" class="input_ttdathang">
                                    </td>
                                </tr>
                                <tr style="margin-bottom: 14px; font-size:26px;">
                                    <td style="text-align: left;">Địa chỉ</td>
                                    <td>
                                        <i class="fa-solid fa-location-dot icon_dathang"></i>
                                        <input type="text" name="address" value="<?=$address?>" class="input_ttdathang">
                                    </td>
                                </tr>
                                <tr style="margin-bottom: 14px; font-size:26px;">
                                    <td style="text-align: left;">Email</td>
                                    <td>
                                        <i class="fa-solid fa-envelope icon_dathang"></i>
                                        <input type="text" name="email" value="<?=$email?>" class="input_ttdathang">
                                    </td>
                                </tr>
                                <tr style="margin-bottom: 14px; font-size:26px;">
                                    <td style="text-align: left;">Điện thoại</td>
                                    <td>
                                        <i class="fa-solid fa-phone-volume icon_dathang"></i>
                                        <input type="text" name="tel" value="<?=$tel?>" class="input_ttdathang">
                                    </td>
                                </tr>
                            </div>
                            
                            
                        </table>
                    </div>
                </div>
            </div>   
            
            <div class="giohang_modify giohang_modify-thongtindathang" >
                <div class="title_giohang">
                    <h1>PHƯƠNG THỨC THANH TOÁN</h1>
                </div>
                <div class="content_item_giohang">
                    <div class="loai">
                        <div class="input_thanhtoan" >
                            <div class="input_tienmat inputthanhtoan-item" style="margin-left: 20px;">
                                <input type="radio" value="1" name="pttt" checked> 
                                <i class="fa-solid fa-sack-dollar bxs-bank_icon fa-solid-input"></i>
                                Thanh toán khi nhận hàng
                            <div class="input_bank inputthanhtoan-item" style="margin-left: 30px;">
                                <input type="radio" value="2"  name="pttt"> 
                                <i class="fa-solid fa-building-columns bxs-bank_icon fa-solid-input"></i>
                                Thanh toán qua ngân hàng
                            </div>
                            <div class="input_online inputthanhtoan-item" style="margin-left: 30px;">
                                <input type="radio"  value="3" name="pttt"> 
                                <i class="fa-brands fa-cc-amazon-pay bxs-bank_icon"></i>
                                Thanh toán online
                            </div>
                            
                        </div>
                        <!-- <table>
                            <tr>
                                <td>
                                    <i class='bx bxs-bank'></i>
                                    <input type="radio" name="pttt"> Trả tiền khi nhận hàng 
                                </td>
                                <td><input type="radio" name="pttt"> Chuyển khoản ngân hàng </td>
                                <td><input type="radio" name="pttt"> Thanh toán online</td>
                            </tr>
                        </table> -->
                    </div>
                </div>  
            </div>
    
            <div class="giohang_modify giohang_modify-thongtindathang">
                <div class="title_giohang">
                    <h1>THÔNG TIN GIỎ HÀNG</h1>
                </div>
                <div class="content_item_giohang">
                    <div class="loai">
                        <table border="1" style="width: 95%;border-collapse: collapse;">
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
                              
                                    global $img_path;
                                    $tong=0;
                                    $i=0;
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $hinh=$img_path.$cart[2];
                                        $ttien=$cart[3] * $cart[4];
                                        $tong=$tong+$ttien;
                                        
                                        echo '<tr>
                                                <td></td>
                                                <td class="giohang_img"><img src="'.$hinh.'" alt="" class="giohang_img-item"></td>
                                                <td>'.$cart[1].'</td>
                                                <td>'.$cart[3].'đ</td>
                                                <td>'.$cart[4].'</td>
                                                <td>'.$ttien.'đ</td>
                                               
                                            </tr>';
                                        $i+=1;
                                    }
                                    echo '<tr>
                                            <td></td>
                                            <td colspan="4">Tổng đơn hàng</td>
                                            <td>'.$tong.' VNĐ</td>
                                            <td></td>
                                        </tr>';
                               
                            ?>
                        </table>
                    </div>
                </div>
                <div class="btn_dongydathang">
                     <a href="index.php?act=billcomfirm">
                        <input type="submit" value="Đồng ý đặt hàng" name="dongydathang" class="btn_dongydathang-input">
                    </a>
                
                        <!-- <input type="submit" value="Đồng ý đặt hàng" name="dongydathang" class="btn_dongydathang-input"> -->
                </div>
            </div>
        </form>













    </div>
</div>
</body>
</html>
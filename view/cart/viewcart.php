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
<div class="row giohang_modify-thongtindathang-item giohang_modify-mobile">
    <div class="giohang_modify giohang_modify-thongtindathang "  style="margin-top: 16%;">
    <h2 class="thongbao_mua">
      
    </h2>
        <div class="title_giohang">
            <h1>GIỎ HÀNG</h1>
        </div>
        <div class="content_item_giohang">
           <div class="loai">
           <?php
           if(isset($_SESSION['mycart']) && ($_SESSION['mycart']) ){
                echo'
                <table border="1" style="width: 95%; border-collapse: collapse; ">
                    <tr>
                        <th></th>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                        <th></th>
                    </tr > ';
                    
                        global $img_path;
                        $tong=0;
                        $i=0;
                        // $listsanpham = loadall_sanpham($kyw="",$iddm=0);
                        // foreach($listsanpham as $sanpham){
                        //     extract($sanpham);
                         // <span>'.$soluong.' Sản phẩm có sẵn</span>
                        
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh=$img_path.$cart[2];
                            $ttien=$cart[3] * $cart[4];
                            $tong=$tong+$ttien;
                            $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xoá"></a>';
                            $listsanpham = loadone_sanpham_mua($cart[0]);
                            extract($listsanpham);  
                            echo '<tr>
                                    <td></td>
                                    <td class="giohang_img"><img src="'.$hinh.'" alt="" class="giohang_img-item"></td>
                                    <td>'.$cart[1].'</td>
                                    <td>'.$cart[3].' VNĐ</td>
                                        <td >
                                            <div class="hangton_giohang">
                                                <div class="amount-soluong">
                                                    <button class="btn-amount" onclick="handleMinus(this)">
                                                        <i class="fa-solid fa-minus"></i>
                                                    </button>
                                                </div>
                                                <div class="amount-soluong ">
                                                    <span>    
                                                        '.$cart[4].'  
                                                    </span>
                                                </div>
                                                <div class="amount-soluong">
                                                    <button class="btn-amount" onclick="handlePlus(this)">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </button>
                                                </div>
                                                
                                            </div>
                                           
                                            <span class="soluong_sp_trongkho">'.$soluong.' sản phẩm có sẵn</span>
                                        </td>
                                    <td>'.$ttien.' VNĐ</td>
                                    <td>'.$xoasp.'</td>
                                    
                                </tr>';
                            $i+=1;
                        }
                       
                       

                      
                        echo '<tr >
                                <td></td>
                                <td colspan="4">Tổng đơn hàng</td>
                                <td>'.$tong.' VNĐ</td>
                                 <td></td>
                            </tr>';
                        
                        }else{
                            echo'<span class="giohang_trong">Giỏ hàng của bạn còn trống!!</span>';
                        }

                       
                        ?> 
                    
                    
                </table>

               

           </div>
          
        </div>
        <?php
            if(isset($_SESSION['mycart']) && ($_SESSION['mycart']) ){
                echo'
                    <div class="btn_dongydathang">
                        <a href="index.php?act=bill">
                            <input type="button" value="Tiếp tục đặt hàng" class="btn_dongydathang-input">
                        </a>
                        <a href="index.php?act=delcart">
                            <input type="submit" value="Xoá giỏ hàng" class="btn_dongydathang-input">
                        </a>
                    </div>
                ';
            }else{
                echo'<div class="btn_dongydathang btn_dongydathang-input_giohangtrong">
                      
                        <a href="index.php">
                            <input type="button" value="Mua ngay" class="btn_dongydathang-input  btn_dongydathang-input-item">
                        </a>
                        
                    </div>';
            }
        
        ?>                
       
    </div>
            
<!--  -->
     <!-- <script>
         let amountElement = document.getElementById('amount');
        let amount = amountElement.value;
        
        let render = (amount) => {
            amountElement.value = amount;
        }

        let handlePlus = () => {
            // if(amount <= )
            amount++
            render(amount);
        }

        let handleMinus = () => {
            if(amount > 1)
                amount--
            render(amount);
        }


        amountElement.addEventListener('input',() => {
            amount = amountElement.value;
            amount = parseInt(amount);
            amount = (isNaN(amount) || amount==0)?1:amount;
            render(amount);

        });

    </script>  -->
    <script src="../JS/main.js">
        

    </script>


</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes Shop </title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="view/CSS/responsive.css">
    <!-- Link Fontawesome -->
    <link rel="stylesheet" href="view/fontawesome-free-6.1.2-web/css/all.min.css">
    <!-- Link Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Responsive -->
    <link rel="stylesheet" href="view/CSS/style.css">
    <link rel="shortcut icon" href="/view/img/Picture1.png" type="image/x-icon">
 
</head>
<body>  
    <div id="main">
       <div id="header">
        <div class="header__name-shop ">
            
            <div class="header__name-sign js-header__name-sign header_taikhoan js-login">
                <h3  class="header__name-link js-login  " style="font-size:16px ;">
                <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                            
                    ?>
                    <i class='bx bxs-user-circle icon_user' ></i>
                    <?=$user?>
                    
                    <?php

                        }else{

                        
                    ?>
                    <i class='bx bxs-user-circle icon_user js-login' ></i>
                    Tài khoản
                    

                    
                    <?php }?>
                </h3> 

                <div class="header_taikhoan-modal" style="    margin-left: -98px;">
                    <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                    ?>
                        <div class="header_taikhoan-input header_taikhoan-input-login">
                            <p style="font-size: 24px ;">Xin chào <?=$user?></p>
                            
                        </div>
                        <div class="header_taikhoan-input header_taikhoan-link" style="margin-left: -26px;">
                            <a href="index.php?act=mybill_2" class="header_taikhoan_quenmk"  >Đơn hàng của <?=$user?></a>
                        </div>
                        <div class="header_taikhoan-input header_taikhoan-link" style="margin-left: -26px;">
                            <a href="index.php?act=quenmk" class="header_taikhoan_quenmk"  >Quên mật khẩu </a>
                        </div>
                        <div class="header_taikhoan-input header_taikhoan-link">
                            <a href="index.php?act=edit_taikhoan" class="header_taikhoan_dangky" style="margin-left: -58px;">Cập nhật thông tin tài khoản</a>
                        </div>

                        <!-- Phân quyền admin -->
                        <?php if($role==1){ ?>
                        <div class="header_taikhoan-input header_taikhoan-link" style="margin-left: 70px;">
                            <a href="doc/index.php" class="header_taikhoan_quenmk" style="margin-left: -94px;">Đăng nhập Admin </a>
                        </div>
                        <?php }?>
                        <?php if($role==2){ ?>
                        <div class="header_taikhoan-input header_taikhoan-link" style="margin-left: 70px;">
                            <a href="doc/index.php" class="header_taikhoan_quenmk" style="margin-left: -94px;">Đăng nhập Admin </a>
                        </div>
                        <?php }?>
                        <!-- End phan quyền -->

                        
                        <div class="header_taikhoan-input header_taikhoan-link">
                            <a href="index.php?act=thoat" class="header_taikhoan_dangky" style="margin-left: -58px;">Thoát</a>
                        </div>

                    <?php

                        }else{

                        
                    ?>
                    <form action="index.php?act=dangnhap" method="post" class="js-modal js-modal">
                        <div class="header_taikhoan-input">
                            <p>Tên đăng nhập*</p>
                            <input class="header_taikhoan-input-item" type="text" name="user" placeholder="Tên tài khoản" >
                        </div>
                        <div class="header_taikhoan-input">
                            <p>Mật khẩu*</p>
                            <div class="header_taikhoan-input-eye">

                                <input class="header_taikhoan-input-item" type="password" name="pass" placeholder="Mật khậu">
                                <i class="fa-solid fa-eye-slash"></i>
                            </div>

                        </div>
                        <div class="header_taikhoan-input header_taikhoan-input-checkbox ">
                            <input class=" header_taikhoan-input-check" type="checkbox" name="user" > Ghi nhớ tài khoản
                        </div>
                        <div class="header_taikhoan-input">
                            
                            <input class="header_taikhoan-input-item header_taikhoan-btn" type="submit" name="dangnhap" value="Đăng nhập" >
                        </div>
                        
                    </form>
                    <div class="header_taikhoan-input header_taikhoan-link" style="margin-left: 40px;">
                        <a href="index.php?act=quenmk" class="header_taikhoan_quenmk">Quên mật khẩu </a>
                       
                    </div>
                    <div class="header_taikhoan-input header_taikhoan-link">
                        <a href="index.php?act=dangky" class="header_taikhoan_dangky">Đăng ký thành viên</a>
                    </div>
                    
                    <?php }?>
                </div>
            </div>
            
            <div class="header__name-shop-name">
                <a href="index.php" class="link">
                    <h3>P H U C</h3>
                    <p> SNEAKER</p>
                </a>
            </div>
            <div class="header__name-shoping-cart">
                <div class="header__name-search js-header__name-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="header-search-modify header-search-modify-item js-header-search-modify">
                        <form action="index.php?act=cuahang" method="post">
                            <input type="text" name="kyw" class="header_search-modify-item" placeholder="Search...">
                            <input type="submit" name="timkiem" value="Tiềm kiếm" class="timkiem">
                            <button class="header__search-btn">
                                <i class="fa-solid fa-magnifying-glass fa-solid-input"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-search-modify-item-item"></div>
                </div>
                <div class="header__name-shoping">
                    <div class="header__name-shoping_before"></div>
                    <a href="index.php?act=addtocart" class="header__name-cart">
                       <p style="margin-right:4px ;">Giỏ hàng / </p> 
                        <?php
                            if(isset($_SESSION['mycart']) && ($_SESSION['mycart'])){
                                $tong=0;
                                foreach ($_SESSION['mycart'] as $cart) {
                                    $ttien=$cart[3] * $cart[4];
                                    $tong=$tong+$ttien;
                                }
                                echo'<span>'.$tong.'đ</span>'; 

                            }else{
                                echo"0đ";
                            }
                        ?>
                        <i class="fa-solid fa-cart-shopping"></i>
                        <div class="cart_soluong">
                            
                            <?php
                                if(isset($_SESSION['mycart']) && ($_SESSION['mycart'])){
                                    $tong=0;
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $tong=$tong+$cart[4];
                                    }
                                    echo $tong; 
    
                                }else{
                                    echo" 0";
                                }
                            ?>
                        </div>
                        
                    </a>
                    <div class="header__name-shopping-modify " >
                       
                        <div class="sp_giohang_modal">  
                            <?php
                                if(isset($_SESSION['mycart']) && ($_SESSION['mycart'])){
                                    global $img_path;   
                                    $i=0;
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $hinh=$img_path.$cart[2];
                                        $ttien=$cart[3] * $cart[4];
                                        $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><i class="fa-solid fa-trash-can fa-trash-can_icon"></i><input type="button" value="Xoá"></a>';
                                        echo'
                                        <ul class="cart_list">
                                            
                                                <li>
                                                    <div class="cart_list-img">
                                                        <img src="'.$cart[2].'" alt="" class="cart_img">
                                                        <div class="cart_list-name_price">
                                                            <span>'.$cart[1].'</span>
                                                            <span>'.$ttien.'đ</span>
                                                        </div>
                                                        <span class=sl-tronggiohang>Số lượng: 
                                                            <span>'.$cart[4].'</span>
                                                            <span>
                                                                <a href="index.php?act=delcart&idcart='.$i.'">
                                                                    <i class="fa-solid fa-trash-can fa-trash-can_icon"></i>
                                                                    <input type="button" value="Xoá" class="dele_input_modal"></a>
                                                                </span>
                                                        </span>
                                                    </div>
                                                    
                                                </li>
                                           
                                            </ul>
                                            ';
                                        $i+=1;
                                    }
                                }
                                else{
                                    echo'<img src="view/img/no_cart.png" alt="" class="no_cart">';   
                                }
                            ?>
                        </div>
                        <div class="btn_giohang_modal">
                            <?php
                                if(isset($_SESSION['mycart']) && ($_SESSION['mycart'])){
                                    echo'
                                    <a href="index.php?act=addtocart" class="header__name-cart">
                                        <div class="btn_xemgiohang">
                                            Xem giỏ hàng
                                        </div>
                                    </a>  
                                    
                                        <a href="index.php?act=delcart">
                                            <div class="btn_dele_giohang">
                                                <i class="fa-solid fa-trash-can fa-trash-can_dele">
                                                    <input type="submit" value="Xoá giỏ hàng" class="btn_dongydathang-input btn_dongydathang-input_modal">
                                                </i>
                                                </div>
                                        </a>

                                        ';
                                }
                            
                            ?>
                        </div>
                                
                    </div>
                </div>
            </div>


        </div>
        <div class="header__navbar">
                <ul id="nav">
                <!-- <li><i class="fa-solid fa-bars"></i></li> -->
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <?php
                $dsdm=loadall();
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm="index.php?act=cuahang&iddm=".$id;
                        echo ' <li><a href="'.$linkdm.'">'.$name.'</a></li>';
                    }
                ?>

                <!-- <li ><a href="index.php?act=nu">
                    Nữ
                    <i class="fa-solid fa-angle-down fa-solid-nav"></i>
                    </a>
                    <ul class="subnav">
                        
                        <li><a href="">classic</a></li>
                        <li><a href="">sunbaked</a></li>
                        <li><a href="">Chuck</a></li>
                        <li><a href="">adasd</a></li>
                        <li><a href="">asdasd</a></li>
                    </ul>
                </li>
                <li><a href="index.php?act=nam">
                    Nam
                    <i class="fa-solid fa-angle-down fa-solid-nav"></i>
                    </a>
                    <ul class="subnav_nam">
                        <li><a href="">classic</a></li>
                        <li><a href="">sunbaked</a></li>
                        <li><a href="">Chuck</a></li>
                        <li><a href="">adasd</a></li>
                        <li><a href="">asdasd</a></li>
                    </ul>
                </li>
                <li><a href="index.php?act=treem">Trẻ em</a></li>
                <li><a href="index.php?act=phukien">Phụ kiện khác</a></li> -->
                <li><a href="index.php?act=tintuc">Tin Tức</a></li>
                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
            </ul>
        </div>
    </div>
<script src="./JS/main.js"></script>
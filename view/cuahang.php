<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nữ-Shoes Shop</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="view/CSS/style.css">
    <!-- Link Fontawesome -->
    <link rel="stylesheet" href="view/fontawesome-free-6.1.2-web/css/all.min.css">
    <!-- Link Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Responsive -->
    <link rel="stylesheet" href="view/CSS/responsive.css">
    <!-- Link CSS -->
    <link rel="stylesheet" href="view/CSS/nu.css">
</head>
<body>  
    <!-- <div id="main">
       <div id="header">
        <div class="header__name-shop ">
            <div class="header__name-sign js-header__name-sign ">
                <h3  class="header__name-link js-login ">Đăng Nhập</h3> /
                <h3  class="header__name-link js-logout ">Đăng Ký</h3>
            </div>
            <div class="header__name-shop-name">
                <a href="view/index.html" class="link">
                    <h3>P H U C</h3>
                    <p> SNEAKER</p>
                </a>
            </div>
            <div class="header__name-shoping-cart">
                <!-- <div class="header__name-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="header-search-modify">
                        <input type="text" class="header_search-modify-item" placeholder="Search...">
                        <button class="header__search-btn">
                            <i class="fa-solid fa-magnifying-glass fa-solid-input"></i>
                        </button>
                    </div>
                    <div class="header-search-modify-item-item"></div>
                </div> -->
                <div class="header__name-shoping">
                    <a href="" class="header__name-cart">
                        Giỏ hàng / 0đ
                    </a>
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="header__name-shopping-modify">
                        <img src="view/img/no_cart.png" alt="" class="no_cart">
                        
                    </div>
                </div>
            </div>


        </div> -->
        <div class="header__navbar">
        <ul id="nav">
                   
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
    <!-- Content -->
       <div id="content">
            <div class="grid wide">
                <div class="row">
                    <div class="content-navbar">
                        <div class="content-navbar-link">
                            <a href="/index.php" class="content-navbar-link-link" >Trang chủ</a>
                            <span>/</span>
                            <h2><?=$tendm?></h2>
                        </div>
                        <div class="content-navbar-content">
                        <h2>DANH MỤC: <strong><?=$tendm?></strong ></h2>
                            <!-- <p>Hiển thị 1–12 trong 22 kết quả</p>
                            <div class="content-navbar-display">
                                <select name="" id="" class="content-navbar-display-modify">
                                    <option value="">
                                        Thứ tự mặc định
                                    </option>
                                    <option value="">
                                        Mới nhất
                                    </option>
                                    <option value="">
                                        Phổ biến
                                    </option>
                                    <option value="">
                                        Giảm giá
                                    </option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l-3 m-4 c-12">
                        <div class="content-category" >
                            <h2>Sản phẩm mới nhất</h2>
                            <ul class="content-category-item">

                                <?php
                                    foreach($dstop10 as $sp){
                                        extract($sp);
                                        $linksp="index.php?act=sanphamct&idsp=".$id;
                                        $img=$img_path.$img;
                                        echo '<li>
                                        <a href="'.$linksp.'" class="content-category-link">
                                            <div class="conten-categogy-img">
                                                <img src="'.$img.'" alt="" class="category-img">
                                            </div>
                                            <div class="content-category-note">
                                                <p>'.$name.'</p>
                                                <h1>'.$price.'đ</h1>
                                            </div>
                                        </a>
                                    </li>' ;
                                    }
                                ?>
                               
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col l-9 m-8 c-12">
                        <div class="row">
                        
                                    <?php
                                        foreach($dssp as $sp){
                                            extract($sp);
                                            $hinh=$img_path.$img;
                                            $linksp="index.php?act=sanphamct&idsp=".$id;
                                            $listluotxem = loadone_sp_luotxem($id);
                                            extract($listluotxem);
                                            echo '<div class="col l-3 m-4 c-6">
                                                        <a href="'.$linksp.'" class="item-buy item-buy-addgiohang " style="text-decoration: none;">
                                                            <div class="item">
                                                                <img src="'.$hinh.'" alt="" class="item-img">
                                                                <h4 class="item-name">'.$name.'</h4>
                                                                <span>'.$price.'đ</span> 
                                                                <div class="item-btn-themvaogiohang">
                                                                    <form action="index.php?act=addtocart" method="post">
                                                                        <input type="hidden" name="id" value="'.$id.'">
                                                                        <input type="hidden" name="name" value="'.$name.'">
                                                                        <input type="hidden" name="img" value="'.$img.'">
                                                                        <input type="hidden" name="price" value="'.$price.'">
                                                                        <input type="submit" name="addtocart" value="Thêm vào giỏ" class="btn_input_themvaogiohang btn_input_themvaogiohang-item btn_input_themvaogiohang_cuahang" >
                                                                    </form>
                                                                    <div class="item-sale-sale_new_item item-sale-sale_new_item_cuahang"><i class="fa-regular fa-eye fa-eye_view"></i>'.$luotxem.' lượt xem</div>
                                                                    <div class="item-sale-sale_new_item_icon sanphamct_danhgia_cuahang">
                                                                        <div class="sanphamct_danhgia ">
                                                                            <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                                            <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                                            <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                                            <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                                            <i class="fa-regular fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>      
                                                        </a>
                                                    </div>';
                                        }
                                    ?>
                                  
                            


                        </div>
                       
                    </div>
                </div>
            </div>
            
       </div>
    
    

    </div>

    <!-- Link Js -->
    <Script src="view/JS/main.js"> 
    </Script>
</body>
</html>
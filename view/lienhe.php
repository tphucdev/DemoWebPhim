<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ-Shoes Shop </title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="view/CSS/style.css">
    <link rel="stylesheet" href="view/CSS/gioithieu.css">
    <!-- Link Fontawesome -->
    <link rel="stylesheet" href="view/fontawesome-free-6.1.2-web/css/all.min.css">
    <!-- Link Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Responsive -->
    <link rel="stylesheet" href="view/CSS/responsive.css">
    <link rel="stylesheet" href="view/CSS/lienhe.css">
    
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
                <a href="./index.html" class="link">
                    <h3>P H U C</h3>
                    <p> SNEAKER</p>
                </a>
            </div>
            <div class="header__name-shoping-cart">
                <div class="header__name-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="header-search-modify">
                        <input type="text" class="header_search-modify-item" placeholder="Search...">
                        <button class="header__search-btn">
                            <i class="fa-solid fa-magnifying-glass fa-solid-input"></i>
                        </button>
                    </div>
                    <div class="header-search-modify-item-item"></div>
                </div>
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
    <!-- Silder -->
       <div id="slider">
            <img src="view/img/qcgiamgia.jpg" alt="" class="slder-img">
            <div class="slider-name">
                <h2>Liên hệ</h2>
                <div class="slider-name-link">
                    <a href="/index.php" class="slider-link">Trang chủ</a>
                    <span>/</span>
                    <h4>Liên hệ</h4>
                </div>
            </div>
       </div>
    <!-- Content -->
       <div id="container">
        <div class="grid wide">
            <div class="row">
                <div class="col l-6 m-6 c-12">

                    <div class="content">
                        <div class="info">
                            <h2>Thông tin liên hệ</h2>
                            <span>
                                <i class="container-icon fa-solid fa-location-dot"></i>
                                73 Nguyễn Huệ - Phường 2 - TP Vĩnh Long
                            </span>
                            <span>
                                <i class="container-icon fa-solid fa-phone"></i>
                                0704825932
                            </span>
                            <span>
                                <div class="info-email">
                                    <i class="container-icon fa-regular fa-envelope"></i>
                                    <div class="info-email-link">
                                        <a href="">20004154@stvlute.edu.vn</a>
                                        <a href="">20004226@stvlute.edu.vn</a>
                                    </div>
                                </div>
                            </span>
                            <div class="info-link">
                                <a href="" class="info-link-link info-link-link-fb">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="" class="info-link-link info-link-link-instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="" class="info-link-link info-link-link-twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="" class="info-link-link info-link-link-rss">
                                    <i class="fa-solid fa-rss"></i>
                                </a>

                            </div>
                        </div>
                    
                    </div>
                </div>

                <div class="col l-6 m-6 c12">
                    <div class="feed">
                        <div class="feed-name">
                            <input type="text" name="ho ten" placeholder="Họ và Tên">
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div class="feed-address">
                            <input type="text" placeholder="Số điện thoại" maxlength="20">
                            <input type="text" name="address" placeholder="Địa chỉ">
                        </div>
                        <div class="feed-message">
                            <input type="text" placeholder="Lời nhắn" cols="40" rows="5">
                        </div>
                        <div class="feed-btn">
                            <button class="feed-btn-btn">
                                <a href="" class="btn-link">Gửi</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
       <!-- Slider -->
       <div id="slider2">
            <div class="slider-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.144156168644!2d105.95962111461775!3d10.249955392680075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a82ce4144a215%3A0xf0fc3e5271c09ba7!2zNzMgTmd1eeG7hW4gSHXhu4csIFBoxrDhu51uZyAyLCBWxKluaCBMb25nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1664814557442!5m2!1svi!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>       </div>
       <!-- Footer -->
       <div id="footer">
        <div class="grid wide">
            <div class="container">
                <div class="container-modify container-introduce">
                    <div class="container-intro-item">
                        <h4><span>Giới</span> thiệu</h4>
                        <p>Chào mừng bạn đến với ngôi nhà Phuc!
                            Tại đây, mỗi một dòng chữ, mỗi chi tiết và
                            hình ảnh đều là những bằng chứng mang
                            dấu ấn lịch sử Phuc 100 năm, và đang
                             không ngừng phát triển lớn mạnh.</p>
                    </div>
                </div>
                <div class="container-modify container-address">
                    <h4><span>Địa</span> chỉ</h4>
                    <div class="container-location">
                        <i class="container-icon fa-solid fa-location-dot"></i>
                        73 Nguyễn Huệ , Phường 2, Thành phố Vĩnh Long
                    </div>
                    <div class="container-telephone">
                        <i class="container-icon fa-solid fa-phone"></i>
                        0704825932
                    </div>
                    <div class="container-email">
                        <i class="container-icon fa-regular fa-envelope"></i>
                        <a href="">20004154@stvlute.edu.vn</a>
                    </div>

                </div>
                <div class="container-modify container-menu">
                    <h4><span>Menu</span></h4>
                        <ul class="container-menu-link">
                            <li class="menu-link">
                                <a href="view/index.html" class="menu-link-link " >Trang chủ</a>
                            </li>
                            <li class="menu-link">
                                <a href="view/Gioithieu.html" >Giới thiệu</a>
                            </li>
                        </ul>
                        <ul class="container-menu-link">
                            <li class="menu-link">
                                <a href="view/cuahang.html" class="menu-link-link">Cửa hàng</a>
                            </li>
                            <li class="menu-link">
                                <a href="" class="menu-link-link">Tin tức</a>
                            </li>
                        </ul>
                        <ul class="container-menu-link">
                            <li class="menu-link">
                                <a href="#" class="menu-link-link" class="menu-link-link" style="color: #c30005;">Liên hệ</a>
                            </li>
                        </ul>
                    
                </div>
                <div class="container-modify container-network">
                    <h4><span>Mạng</span> xã hội</h4>
                    <div class="container-app">
                        <i class="fa-brands fa-brands-app fa-facebook"></i>
                        <i class="fa-brands fa-brands-app fa-instagram"></i>
                        <i class="fa-brands fa-brands-app fa-twitter"></i>
                    </div>
                </div>

            </div>
            <div class="container-under"></div>
        </div>
        <div class="footer-navbar">
            <p> &#169 Báo cáo Web của Phúc và Trí</p>
        </div>
       </div>
       <!-- Modal Đăng Nhập-->
       <div class="modal js-modal">
           <div class="modal-element js-modal-element">
                <div class="modal-container js-modal-container">
                    <header class="modal-header">
                        <i class="fa-solid fa-xmark js-fa-xmark"></i>   
                        <div class="modal-header-modify">
                            <h3>Đăng nhập</h3>
                            <div class="modal-input">
                                Tên tài khoản hoặc địa chỉ email*
                                <input type="text" class="modal-input-ueser modal-input-ueser-modify">
                            </div>
                            <div class="modal-input modal-input-modify">
                                Mật khẩu*
                                <input type="text" class="modal-input-ueser modal-input-ueser-modify  ">
                                <i class="fa-solid fa-eye fa-eye-item js-fa-eye hide-pass"></i>
                                <i class="fa-solid fa-eye-slash fa-eye-item js-fa-eye-slash "></i>
                            </div>
                            <div class="modal-btn">
                                <button class="modal-btn-item">
                                    Đăng nhập
                                </button>
                                <input type="checkbox" class="modal-checkbox">Ghi nhớ mật khẩu
                            </div>
                            <div class="modal-modify">
                                <a href="view/quenmk.html" class="modal-modify-link">Quên mật khẩu</a>
                            </div>  
                            <div class="modal-modify-element">
                                <p>HOẶC</p>
                            </div>
                            <div class="modal-modify-app">
                                <button class="modal-modify-app-link">
                                    <i class="fa-brands fa-facebook"></i>   
                                </button>
                                <button class="modal-modify-app-link">
                                    <i class="fa-brands fa-google"></i>
                                </button>
                                <button class="modal-modify-app-link">
                                    <i class="fa-brands fa-apple"></i>
                                </button>
                            </div>
                            <div class="modal-modify-question">
                                <span class="modal-modify-question-item">Bạn có biết đến website PHUC?</span>
                                <span class="modal-modify-link-item js-modal-modify-link-item">Đăng Ký</span>
                            </div> 

                        </div>
                    </header>
                </div>
           </div>
       </div>
       <!-- End Modal Đăng Nhập -->
       
       <!-- Modal Đăng Ký -->
       <div class="modal js-modal-dk ">
            <div class="modal-element js-modal-element-dk ">
                <div class="modal-container js-modal-container-dk ">
                     <header class="modal-header">
                        <i class="fa-solid fa-xmark js-fa-xmark-dk"></i>   
                        <div class="modal-header-modify">
                            <h3>Đăng Ký</h3>
                             <div class="modal-input">
                                Tên đăng nhập*
                                <input type="text" class="modal-input-ueser" placeholder="Email hoặc Số điện thoại">
                            </div>
                            <div class="modal-input">
                                 Mật khẩu*
                                <input type="text" class="modal-input-ueser" placeholder="Password">
                            </div>
                            <div class="modal-input">
                                Xác nhận lại mật khẩu*
                               <input type="text" class="modal-input-ueser" placeholder="Confirm Password">
                           </div>
                           
                             <div class="modal-btn">
                                <button class="modal-btn-item modal-btn-item-modify">
                                    Đăng Ký
                                </button>
                            </div>
                            <div class="modal-modify-element">
                                <p>HOẶC</p>
                            </div>
                            <div class="modal-modify-app">
                                <button class="modal-modify-app-link">
                                    <i class="fa-brands fa-facebook"></i>   
                                </button>
                                <button class="modal-modify-app-link">
                                    <i class="fa-brands fa-google"></i>
                                </button>
                                <button class="modal-modify-app-link">
                                    <i class="fa-brands fa-apple"></i>
                                </button>
                            </div>
                            <div class="modal-modify-rules">
                                <div class="modal-modify-elment">
                                    <span>Bằng việc đăng ký, bạn đã đồng ý với PHUC về </span>
                                    <p>
                                        <a href="#" class="modal-modify-link-rules">Điều khoản dịch vụ</a> &
                                        <a href="#" class="modal-modify-link-rules">Chính sách bảo mật</a>
                                    </p>
                                </div>
                            </div>
                            <div class="modal-modify-question">
                                <span class="modal-modify-question-item">Bạn đã có tài khoản?</span>
                                <span class="modal-modify-link-item js-modal-modify-link-item-dn">Đăng Nhập</span>
                            </div> 


                        </div>
                    </header>
                </div>
            </div>
        </div>

    </div>

    <!-- Link Js -->
    <Script src="view/JS/main.js"> 
    </Script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu-Shoes Shop </title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="view/CSS/style.css">
    <link rel="stylesheet" href="view/Gioithieu/main.css">
    <!-- Link Fontawesome -->
    <link rel="stylesheet" href="view/fontawesome-free-6.1.2-web/css/all.min.css">
    <!-- Link Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Responsive -->
    <link rel="stylesheet" href="view/CSS/responsive.css">
    <link rel="stylesheet" href="view/CSS/gioithieu.css">
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
                <h2>Giới thiệu</h2>
                <div class="slider-name-link">
                    <a href="/index.php" class="slider-link">Trang chủ</a>
                    <span>/</span>
                    <h4>Giới thiệu</h4>
                </div>
            </div>
       </div>
    <!-- Content -->
       <div id="container">
            <div class="grid wide">
                <div class="row">
                    <div class="container-content">
                        <div class="content-img" ><img src="view/img/gioithieu2.jpg" alt=""></div>
                        <div class="content-intro">
                            <h2>Giới thiệu</h2>
                            <p>Chào mừng bạn đến với ngôi nhà Converse! Tại đây, mỗi một dòng chữ, mỗi chi tiết 
                                à hình ảnh đều là những bằng chứng mang dấu 
                                ấn lịch sử Converse 100 năm, 
                                và đang không ngừng phát triển lớn mạnh.</p>
                            <h3>Sản phẩm giày tốt nhất</h3>
                            <div class="content-item">
                                <p>Chào mừng bạn đến với ngôi nhà Converse! Tại đây, mỗi một dòng chữ, 
                                    mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử 
                                    Converse 100 năm, và đang không ngừng phát triển lớn mạnh.</p>
                                <p>Chào mừng bạn đến với ngôi nhà Converse! Tại đây, mỗi một dòng chữ, 
                                    mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử 
                                    Converse 100 năm, và đang không ngừng phát triển lớn mạnh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l-6 m6 c12">
                            <div class="contaner-modify modify">
                                <div class="container-deli">
                                    <i class="fa-solid fa-truck"></i>
                                    <div class="container-ND">
                                        <h2>Miễn phí giao hàng</h2>
                                        <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn
                                             lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                                    </div>
                                </div>
                                <div class="container-modify-item">Free</div>
                            </div>
                        </div>
                        <div class="col l-6 m6 c12">
                            <div class="contaner-modify">
                                <div class="container-deli">
                                    <i class="fa-solid fa-hand-holding-dollar"></i>
                                    <div class="container-ND">
                                        <h2>Đổi trả trong vòng 7 ngày</h2>
                                        <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn
                                             lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l-6 m6 c12">
                            <div class="contaner-modify modify-item">
                                <div class="container-deli">
                                    <i class="fa-solid fa-certificate"></i>
                                    <div class="container-ND">
                                        <h2>Miễn phí giao hàng</h2>
                                        <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn
                                             lịch sử Converse 100 năm, 
                                            và đang không ngừng phát triển lớn mạnh</p>
                                    </div>
                                </div>
                                <div class="container-modify-item-item">New</div>
                            </div>
                        </div>
                        <div class="col l-6 m6 c12">
                            <div class="contaner-modify">
                                <div class="container-deli">
                                    <i class="fa-solid fa-comments"></i>
                                    <div class="container-ND">
                                        <h2>Chăm sóc khách hàng</h2>
                                        <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn
                                             lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l-6 m6 c12">
                            <div class="contaner-modify">
                                <div class="container-deli">
                                    <i class="fa-solid fa-shield-halved"></i>
                                    <div class="container-ND">
                                        <h2>Hàng chình hãng</h2>
                                        <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn
                                             lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6 m6 c12">
                            <div class="contaner-modify">
                                <div class="container-deli">
                                    <i class="fa-regular fa-credit-card"></i>
                                    <div class="container-ND">
                                        <h2>Thanh toán đa dạng</h2>
                                        <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn
                                             lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
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
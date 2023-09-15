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
                   
                   <li><a href="/index.php">Trang chủ</a></li>
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
                            <h2>DANH MỤC: <?=$tendm?></h2>
                        </div>
                        <div class="content-navbar-content">

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
                                                <h1>'.$price.' VNĐ</h1>
                                            </div>
                                            
                                        </a>
                                    </li>' ;
                                    }
                                ?>
                                <!-- <li>
                                    <a href="" class="content-category-link">
                                        <div class="conten-categogy-img">
                                            <img src="view/img/img_item/imgitem1.jpg" alt="" class="category-img">
                                        </div>
                                        <div class="content-category-note">
                                            <p>Giày adidas</p>
                                            <h1>2,800,000đ</h1>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="content-category-link">
                                        <div class="conten-categogy-img">
                                            <img src="view/img/img_item/imgitem1.jpg" alt="" class="category-img">
                                        </div>
                                        <div class="content-category-note">
                                            <p>Giày adidas</p>
                                            <h1>2,800,000đ</h1>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="content-category-link">
                                        <div class="conten-categogy-img">
                                            <img src="view/img/img_item/imgitem1.jpg" alt="" class="category-img">
                                        </div>
                                        <div class="content-category-note">
                                            <p>Giày adidas</p>
                                            <h1>2,800,000đ</h1>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="content-category-link">
                                        <div class="conten-categogy-img">
                                            <img src="view/img/img_item/imgitem1.jpg" alt="" class="category-img">
                                        </div>
                                        <div class="content-category-note">
                                            <p>Giày adidas</p>
                                            <h1>2,800,000đ</h1>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="content-category-link">
                                        <div class="conten-categogy-img">
                                            <img src="view/img/img_item/imgitem1.jpg" alt="" class="category-img">
                                        </div>
                                        <div class="content-category-note">
                                            <p>Giày adidas</p>
                                            <h1>2,800,000đ</h1>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="content-category-link">
                                        <div class="conten-categogy-img">
                                            <img src="view/img/img_item/imgitem1.jpg" alt="" class="category-img">
                                        </div>
                                        <div class="content-category-note">
                                            <p>Giày adidas</p>
                                            <h1>2,800,000đ</h1>
                                        </div>
                                    </a>
                                </li>
                                 -->
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col l-9 m-8 c-12">
                        <div class="row">
                            <div class="sanphamct  sanphamct_item">
                                <div class="sanphamct_title">
                                    <?php
                                        extract($onesp);
                                    ?>
                                    <h1><?=$name?></h1>
                                </div>
                                <div class="sanphamct_content">
                                    <?php
                                        $_SESSION['mycart'];
                                        $hinh=$img_path.$img;
                                        $listsanpham = loadone_sanpham_mua($id);
                                        extract($listsanpham);
                                        // echo '<div class="samphamct_img" >
                                        //         <img class="samphamct_img_item" src="'.$img.'"><br>
                                        //     </div>';
                                        // echo $mota;
                                        
                                        echo '
                                        
                                        <div class="samphamct_img " >
                                                <img class="samphamct_img_item" src="'.$hinh.'"><br>
                                                <div class="sanphamct_info">
                                                    <div class="sanpham_tensp">
                                                        '.$name.'
                                                    </div>
                                                    <div class="sanphamct_mota">
                                                        '.$mota.'
                                                    </div>
                                                    <div class="sanpham_mota_data">
                                                        <div class="sanphamct_danhgia"><span>5.0 </span>
                                                            <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                            <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                            <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                            <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                            <i class="fa-regular fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                        </div>
                                                        <div class="sanpham_mota_data_item">
                                                            <span>50</span> Đánh giá
                                                        </div>
                                                        <div class="sanpham_mota_data_item">
                                                            <span>129</span> Đã bán
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="sanpham_size">
                                                        <span class="sanpham_size_title">Size:</span> 
                                                        <div class="sanpham_size_item">
                                                            <span>36</span>
                                                            <span>37</span>
                                                            <span>38</span>
                                                            <span>39</span>
                                                            <span>40</span>
                                                            <span>41</span>
                                                            <span>42</span>
                                                            <span>43</span>
                                                        </div>
                                                    </div>
                                                    <div class="sanpham_size sanpham_mau">
                                                        <span class="sanpham_size_title">Màu:</span> 
                                                        <div class="sanpham_size_item">
                                                            <span>Đỏ</span>
                                                            <span>Đen</span>
                                                            <span>Trắng</span>
                                                            <span>Đen trắng</span>
                                                        </div>
                                                    </div>
                                                    <div class="sanpham_gia">Giá: 
                                                        '.$price.' VNĐ
                                                    </div>
                                                    <div class="sanpham_sl_btn"> 
                                                        
                                                        <div class="hangton_giohang">
                                                        
                                                            <div class="amount-soluong amount-soluong_add" >
                                                                <button class="btn-amount" onclick="handleMinus(this)">
                                                                    <i class="fa-solid fa-minus"></i>
                                                                </button>
                                                            </div>
                                                           
                                                            <div class="amount-soluong amount-soluong_span">
                                                                    <span style="display:none">1</span>
                                                            </div>
                                                            <div class="amount-soluong" >
                                                                <button class="btn-amount" onclick="handlePlus(this)">
                                                                    <i class="fa-solid fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            
                                                        </div>
                                                       
                                                    </div>
                                                   
                                                    <div class="sanpham_sl_trongkho"> 
                                                        '.$soluong.' sản phẩm có sẵn 
                                                    </div>
                                                    <div class="item-btn-themvaogiohang btn_input_chitiethang">
                                                        <form action="index.php?act=addtocart" method="post">
                                                            <input type="hidden" name="id" value="'.$id.'">
                                                            <input type="hidden" name="name" value="'.$name.'">
                                                            <input type="hidden" name="img" value="'.$img.'">
                                                            <input type="hidden" name="price" value="'.$price.'"> 
                                                            <input type="number" name="soluong" value="1" required class="input_mua_sl" min="1" max="100"> 
                                                            <i class="fa-solid fa-cart-plus  fa-cart-plus_icon_tvg" ></i>
                                                            <input type="submit" name="addtocart" value="Thêm vào giỏ" class="btn_chitiethang" >
                                                        </form>
                                                    </div>
                                                    
                                                    
                                                </div>
                                        </div>';
                                        
                                    ?>
                                </div>
                            </div>
                                    <!-- phần javascript tăng giảm-->
                                    <!-- <div class="sanpham_sl_btn"> 
                                                        
                                                        <div class="hangton_giohang">
                                                        
                                                            <div class="amount-soluong">
                                                                <button class="btn-amount" onclick="handleMinus(this)">
                                                                    <i class="fa-solid fa-minus"></i>
                                                                </button>
                                                            </div>
                                                           
                                                            <div class="amount-soluong amount-soluong_span">
                                                                <form action="index.php?act=addtocart" method="post">
                                                                    <input type="number" name="soluong" value="1" required> 
                                                                </form>
                                                            </div>
                                                            <div class="amount-soluong">
                                                                <button class="btn-amount" onclick="handlePlus(this)">
                                                                    <i class="fa-solid fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            
                                                        </div>
                                                       
                                                    </div> -->
                                    <!-- End -->
                            
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function(){
                              
                                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                              
                                });
                            </script>

                            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function(){
                                    $("#binhluan").load("view/binhluanform.php",{idpro: <?=$id?>});
                                });
                            </script> -->
                            <div class="sanphamct" id="binhluan">
                               
                            </div>

                            <!-- <div class="sanphamct">
                                <iframe src="view/binhluan/binhluanform.php?idpro=<?=$id?>" frameborder="0" width="100%" height="300px"></iframe>
                            </div> -->

                                

                            <div class="sanphamct">
                                <div class="sanphamct_title">
                                    <h1>SẢN PHẨM CÙNG LOẠI</h1>
                                </div>
                                <div class="sanphamct_content" style="margin-top:30px ;">
                                    <div class="row">

                                        <?php
                                            foreach($sp_cung_loai as $sp_cung_loai){
                                                extract($sp_cung_loai);
                                                $hinh=$img_path.$img;
                                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                                $listluotxem = loadone_sp_luotxem($id);
                                                extract($listluotxem);
                                                // echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';

                                                echo '
                                                
                                                    <div class="col l-3 m-4 c-6">
                                                        <a href="'.$linksp.'" class="item-buy item-buy-addgiohang " style="text-decoration: none;">
                                                            <div class="item item_spct">
                                                                <img src="'.$hinh.'" alt="" class="item-img">
                                                                <h4 class="item-name">'.$name.'</h4>
                                                                <span>'.$price.'đ</span> 
                                                                <div class="item-sale-sale_new_item item-sale-sale_new_item_spct"><i class="fa-regular fa-eye fa-eye_view"></i>'.$luotxem.' lượt xem</div>
                                                                <div class="item-btn-themvaogiohang">
                                                                    <form action="index.php?act=addtocart" method="post">
                                                                        <input type="hidden" name="id" value="'.$id.'">
                                                                        <input type="hidden" name="name" value="'.$name.'">
                                                                        <input type="hidden" name="img" value="'.$img.'">
                                                                        <input type="hidden" name="price" value="'.$price.'">
                                                                        <input type="submit" name="addtocart" value="Thêm vào giỏ" class="btn_input_themvaogiohang btn_input_themvaogiohang-item btn_input_themvaogiohang-item-addcart btn_input_themvaogiohang_spct" >
                                                                    </form>
                                                                </div>
                                                                
                                                            </div>      
                                                        </a>
                                                    </div>';

                                            }
                                        ?>
                                    </div>


                                    <?php
                                        // foreach($dssp as $sp){
                                        //     extract($sp);
                                        //     $hinh=$img_path.$img;
                                        //     $linksp="index.php?act=sanphamct&idsp=".$id;
                                        //     echo '<div class="col l-3 m-4 c-6">
                                        //                 <a href="'.$linksp.'" class="item-buy item-buy-addgiohang " style="text-decoration: none;">
                                        //                     <div class="item">
                                        //                         <img src="'.$hinh.'" alt="" class="item-img">
                                        //                         <h4 class="item-name">'.$name.'</h4>
                                        //                         <span>'.$price.'đ</span> 
                                        //                         <div class="item-btn-themvaogiohang">
                                        //                             <form action="index.php?act=addtocart" method="post">
                                        //                                 <input type="hidden" name="id" value="'.$id.'">
                                        //                                 <input type="hidden" name="name" value="'.$name.'">
                                        //                                 <input type="hidden" name="img" value="'.$img.'">
                                        //                                 <input type="hidden" name="price" value="'.$price.'">
                                        //                                 <input type="submit" name="addtocart" value="Thêm vào giỏ" class="btn_input_themvaogiohang btn_input_themvaogiohang-item" >
                                        //                             </form>
                                        //                         </div>
                                        //                     </div>      
                                        //                 </a>
                                        //             </div>';
                                        // }
                                    ?>


                                    
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
    // </Script>
    //  <script>
    //     let amountElement = document.getElementById('amount');
    //     let amount = amountElement.value;
        
    //     let render = (amount) => {
    //         amountElement.value = amount;
    //     }

    //     let handlePlus = () => {
    //         // if(amount <= )
    //         amount++
    //         render(amount);
    //     }

    //     let handleMinus = () => {
    //         if(amount > 1)
    //             amount--
    //         render(amount);
    //     }


    //     amountElement.addEventListener('input',() => {
    //         amount = amountElement.value;
    //         amount = parseInt(amount);
    //         amount = (isNaN(amount) || amount==0)?1:amount;
    //         render(amount);

    //     });
    //     </script>
</body>
</html>
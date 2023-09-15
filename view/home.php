 <!-- Silder -->
 <div id="slider">
            <img src="view/img/img-shoes3.jpg" alt="" id="img"> -->
            <i class='bx bx-chevron-left js-bx-chevron-left'></i>
            <i class='bx bx-chevron-right js-bx-chevron-right'></i>
        
             <div class="slider__contain">
                    <h3>PHUC SNEAKER</h3>
                    <p>Chào mừng bạn đến với shop giày cỏ PHUC! Tại đây, mỗi<br>một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng <br>chứng mang dấu ấn 
                        lịch sử PHUC, và đang không ngừng <br>phát triển lớn mạnh.
                    </p>
            </div>
       </div> 
    <!-- Content -->
       <div id="content">
            <div class="grid wide">
                <div class="row "> 
                    <?php
                        foreach($spnew as $sp){
                            extract($sp);
                            $hinh=$img_path.$img;
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $listluotxem = loadone_sp_luotxem($id);
                            extract($listluotxem);
                            echo '<div class="col l-3 m-4 c-6 ">
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
                                                    <input type="submit" name="addtocart" value=" Thêm vào giỏ " class="btn_input_themvaogiohang" >
                                                </form>
                                            </div>
                                                <div class="item-sale-sale_new">Views</div>
                                                <div class="item-sale-sale_new_item"><i class="fa-regular fa-eye fa-eye_view"></i>'.$luotxem.' lượt xem</div>
                                                <div class="item-sale-sale_new_item_icon">
                                                    <div class="sanphamct_danhgia sanphamct_danhgia_home">
                                                        <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                        <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                        <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                        <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                        <i class="fa-regular fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                    </div>
                                                </div>
                                        </div>      
                                    </a>
                                </div>';
                            }
                            ?>


                            
 
                </div>
                <div class="row-modify-all">
                    <button class="row-modify-all-btn">
                        <a href="index.php?act=cuahang" class="row-modify-all-link">Xem tất cả</a>
                    </button>
                </div>
                <div class="row-item">
                        <?php
                            $dsdm= loadall();
                               
                                    $linkdm="index.php?act=cuahang&iddm=".$id=27;
                                    // echo ' <a href="'.$linkdm.'" class="row-modify-all-link">Xem tất cả</a>';
                                    echo ' <a href="'.$linkdm.'" class="row-item-link">
                                    <p>Phụ kiện khác</p>
                                </a>';
                                
                        ?>
                    <!-- <a href="" class="row-item-link">
                        <p>Phụ kiện khác</p>
                    </a> -->
                </div>
                <div class="row"> 
                    <!-- load nhung sản phẩm thuộc danh muc phụ kiện khác -->
                    <?php
                       
                         $dssp=loadall_sanpham("",27);
                         
                         
                         foreach ($dssp as $sp) {
                            extract($sp);
                            $listluotxem = loadone_sp_luotxem($id);
                            extract($listluotxem);
                            $hinh=$img_path.$img;
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            // echo ' <li><a href="'.$linkdm.'">'.$name.'</a></li>';
                            echo'<div class="col l-3 m-4 c-6">
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
                                                    <input type="submit" name="addtocart" value="Thêm vào giỏ" class="btn_input_themvaogiohang btn_input_themvaogiohang-item btn_input_phukienkhac btn_input_phukienkhac-mobile btn_input_themvaogiohang_phukien" >
                                                </form>
                                            </div>
                                            <div class="item-sale-sale_new_item"><i class="fa-regular fa-eye fa-eye_view"></i>'.$luotxem.' lượt xem</div>
                                                <div class="item-sale-sale_new_item_icon">
                                                    <div class="sanphamct_danhgia sanphamct_danhgia_home">
                                                        <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                        <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                        <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                        <i class="fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                        <i class="fa-regular fa-solid fa-star sanphamct_danhgia-icon"></i>
                                                    </div>
                                                </div>
                                        </div>      
                                    </a>
                                </div>';
                        }
                    ?>
                     <!-- <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/imgphukien/balo1.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <span>1,250,000đ</span>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/imgphukien/balo2.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <span>1,250,000đ</span>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/imgphukien/balo3.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <span>1,250,000đ</span>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/imgphukien/balo4.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <span>1,250,000đ</span>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/imgphukien/ao.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <span>1,250,000đ</span>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/imgphukien/ao2.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <span>1,250,000đ</span>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/imgphukien/a03.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <span>1,250,000đ</span>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/imgphukien/àojpg.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <span>1,250,000đ</span>
                            <button class="item-btn">
                                <a href="#" class="item-buy">Thêm vào giỏ</a>
                            </button>
                        </div>
                    </div>  -->
                   
                </div>
                <div class="row-modify-all">
                    <button class="row-modify-all-btn">
                        <!-- <a href="index.php?=cuahang" class="row-modify-all-link">Xem tất cả</a> -->
                        <?php
                            $dsdm= loadall();
                               
                                    $linkdm="index.php?act=cuahang&iddm=".$id=27;
                                    echo ' <a href="'.$linkdm.'" class="row-modify-all-link">Xem tất cả</a>';
                                
                        ?>
                    </button>
                </div>
                
                
                <div class="slider-item">
                    <img src="view/img/qcgiamgia.jpg" alt="" class="slider-item-img">
                    <div class="slider-modify">
                        <h4>PHUC SNEAKER</h4>
                        <p>Khuyến mãi <span>giảm giá 50%</span></p>
                    </div>
                    <button class="slider-item-btn">
                        <a href="" class="slider-btn-link">Xem sản phẩm</a>
                    </button>
                </div>
                <div class="row-item">
                        <?php
                            $dsdm= loadall();
                               
                                    $linkdm="index.php?act=cuahang&iddm=".$id=31;
                                    // echo ' <a href="'.$linkdm.'" class="row-modify-all-link">Xem tất cả</a>';
                                    echo ' <a href="'.$linkdm.'" class="row-item-link">
                                    <p>Sản Phẩm giảm giá</p>
                                </a>';
                                
                        ?>
                    <!-- <a href="./phukiem.html" class="row-item-link">
                        <p>Sản Phẩm giảm giá</p>
                    </a> -->
                </div>
                <div class="row"> 
                    <?php
                        $dssp=loadall_sanpham("",31);
                        foreach ($dssp as $sp) {
                            extract($sp);
                            $hinh=$img_path.$img;
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $listluotxem = loadone_sp_luotxem($id);
                            extract($listluotxem);
                            // echo ' <li><a href="'.$linkdm.'">'.$name.'</a></li>';
                            // echo'<div class="col l-3 m-4 c-6">
                            //         <a href="'.$linksp.'" class="item-buy item-buy-addgiohang " style="text-decoration: none;">
                            //             <div class="item">
                            //                 <img src="'.$hinh.'" alt="" class="item-img">
                            //                 <h4 class="item-name">'.$name.'</h4>
                            //                 <span>'.$price.'đ</span> 
                            //                 <div class="item-btn-themvaogiohang">
                            //                     <form action="index.php?act=addtocart" method="post">
                            //                         <input type="hidden" name="id" value="'.$id.'">
                            //                         <input type="hidden" name="name" value="'.$name.'">
                            //                         <input type="hidden" name="img" value="'.$img.'">
                            //                         <input type="hidden" name="price" value="'.$price.'">
                            //                         <input type="submit" name="addtocart" value="Thêm vào giỏ" class="btn_input_themvaogiohang btn_input_themvaogiohang-item btn_input_phukienkhac" >
                            //                     </form>
                            //                 </div>
                            //             </div>      
                            //         </a>
                            //     </div>';
                            echo'<div class="col l-3 m-4 c-6">
                            <a href="'.$linksp.'" class="item-buy item-buy-addgiohang " style="text-decoration: none;">
                                <div class="item">
                                    <img src="'.$hinh.'" alt="" class="item-img">
                                    <h4 class="item-name">'.$name.'</h4>
                                    <div class="item-sale">
                                        <div class="item-under">
                                            <span class="item-sale-modify">1,250,000 VNĐ
                                                <div class="item-under-modify"></div>
                                            </span>
                                        </div>
                                        <h1>'.$price.' VNĐ</h1>
                                        
                                    </div>
                                    <div class="item-btn-themvaogiohang">
                                            <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="id" value="'.$id.'">
                                                <input type="hidden" name="name" value="'.$name.'">
                                                <input type="hidden" name="img" value="'.$img.'">
                                                <input type="hidden" name="price" value="'.$price.'">
                                                <input type="submit" name="addtocart" value="Thêm vào giỏ" class="btn_input_themvaogiohang_spgg btn_input_phukienkhac-mobile btn_input_themvaogiohang btn_input_themvaogiohang-item btn_input_phukienkhac" >
                                            </form>
                                        </div>
                                    <div class="item-sale-sale">-30%</div>
                                    <div class="item-sale-sale_new_item"><i class="fa-regular fa-eye fa-eye_view"></i>'.$luotxem.' lượt xem</div>
                                </div>
                            </a>
                        </div> ';
                            }
                        ?>
                           
                    <!-- <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/giamgia/sale-off-1.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <div class="item-sale">
                                <div class="item-under">
                                    <span class="item-sale-modify">1,250,000đ
                                        <div class="item-under-modify"></div>
                                    </span>
                                </div>
                                <h1>1,000,000đ</h1>
                            </div>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                            <div class="item-sale-sale">-30%</div>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/giamgia/sale-off-2.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Nike</h4>
                            <div class="item-sale">
                                <div class="item-under">
                                    <span class="item-sale-modify">5,250,000đ
                                        <div class="item-under-modify"></div>
                                    </span>
                                </div>
                                <h1>4,000,000đ</h1>
                            </div>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                            <div class="item-sale-sale">-30%</div>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/giamgia/sale-off-3.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <div class="item-sale">
                                <div class="item-under">
                                    <span class="item-sale-modify">1,250,000đ
                                        <div class="item-under-modify"></div>
                                    </span>
                                </div>
                                <h1>1,000,000đ</h1>
                            </div>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                            <div class="item-sale-sale">-30%</div>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/giamgia/sale-off-4.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <div class="item-sale">
                                <div class="item-under">
                                    <span class="item-sale-modify">1,250,000đ
                                        <div class="item-under-modify"></div>
                                    </span>
                                </div>
                                <h1>1,000,000đ</h1>
                            </div>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                            <div class="item-sale-sale">-30%</div>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/giamgia/sale-off-5.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <div class="item-sale">
                                <div class="item-under">
                                    <span class="item-sale-modify">1,250,000đ
                                        <div class="item-under-modify"></div>
                                    </span>
                                </div>
                                <h1>1,000,000đ</h1>
                            </div>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                            <div class="item-sale-sale">-30%</div>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/giamgia/sale-off-6.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <div class="item-sale">
                                <div class="item-under">
                                    <span class="item-sale-modify">1,250,000đ
                                        <div class="item-under-modify"></div>
                                    </span>
                                </div>
                                <h1>1,000,000đ</h1>
                            </div>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                            <div class="item-sale-sale">-30%</div>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/giamgia/sale-off-7.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <div class="item-sale">
                                <div class="item-under">
                                    <span class="item-sale-modify">1,250,000đ
                                        <div class="item-under-modify"></div>
                                    </span>
                                </div>
                                <h1>1,000,000đ</h1>
                            </div>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                            <div class="item-sale-sale">-30%</div>
                        </div>
                    </div>
                    <div class="col l-3 m-4 c-6">
                        <div class="item">
                            <img src="view/img/giamgia/sale-off-8.jpg" alt="" class="item-img">
                            <h4 class="item-name">Giày Adidas</h4>
                            <div class="item-sale">
                                <div class="item-under">
                                    <span class="item-sale-modify">1,250,000đ
                                        <div class="item-under-modify"></div>
                                    </span>
                                </div>
                                <h1>1,000,000đ</h1>
                            </div>
                            <button class="item-btn">
                                <a href="" class="item-buy">Thêm vào giỏ</a>
                            </button>
                            <div class="item-sale-sale">-30%</div>
                        </div>
                    </div> -->
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
                                <input type="password" class="modal-input-ueser modal-input-ueser-modify  ">
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
                                <a href="./quenmk.html" class="modal-modify-link">Quên mật khẩu</a>
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
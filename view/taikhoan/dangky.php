<div class="modal-header-modify">
    <h3>Đăng Ký</h3>
    <h2 class="thongbao">
        <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao.'<i class="fa-solid fa-check"></i>';
            }
        ?>
    </h2>
    <h2 class="thongbao2">
        <?php
            if(isset($thongbao2)&&($thongbao2!="")){
                echo $thongbao2;
            }
        ?>
    </h2>
    <form action="index.php?act=dangky" method="post" class="modal-modify-dangky">
        
        <div class="modal-input">
            Email*
            <h2 class="thongbao2">
                <?php
                    if(isset($thongbao_kt1)&&($thongbao_kt1!="")){
                        echo $thongbao_kt1;
                    }
                ?>
            </h2>
            <input type="email" name="email" class="modal-input-ueser" placeholder="Email hoặc Số điện thoại">
        </div>
        <div class="modal-input">
            Tên đăng nhập*
            <h2 class="thongbao2">
                <?php
                    if(isset($thongbao_kt2)&&($thongbao_kt2!="")){
                        echo $thongbao_kt2;
                    }
                ?>
            </h2>
            <h2 class="thongbao2">
                <?php
                    if(isset($thongbao_kt3)&&($thongbao_kt3!="")){
                        echo $thongbao_kt3;
                    }
                ?>
            </h2>
            <input type="text" name="user" class="modal-input-ueser" placeholder="Tên đăng nhập">
        </div>
        <div class="modal-input">
            Mật khẩu*
            <h2 class="thongbao2">
                <?php
                    if(isset($thongbao_kt4)&&($thongbao_kt4!="")){
                        echo $thongbao_kt4;
                    }
                ?>
            </h2>
            <input type="password" name="pass" class="modal-input-ueser" placeholder="Password">
        </div>
        <div class="modal-input">
            Địa chỉ*
            <input type="text" name="address" class="modal-input-ueser" placeholder="Địa chỉ">
        </div>
        <div class="modal-input">
            Số điện thoại*
            <input type="text" name="tel" class="modal-input-ueser" placeholder="Số điện thoại">
        </div>
        
        <!-- <div class="modal-input">
            Xác nhận lại mật khẩu*
            <input type="text" class="modal-input-ueser" placeholder="Confirm Password">
        </div> -->
        <input type="submit" value="Đăng ký" name="dangky" class="btn-input">
        <input type="reset" value="Nhập lại" class="btn-input">
        
        <div class="modal-modify-element-modify-item">

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
                <a href="index.php?act=dangnhaptk"> <span class="modal-modify-link-item js-modal-modify-link-item-dn">Đăng Nhập</span></a>    
            </div> 
        </div>
        
    </form>
                           
</div>
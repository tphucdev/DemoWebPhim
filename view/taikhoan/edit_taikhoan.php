<?php
    if(is_array($taikhoan)){
        extract($taikhoan);
    } 
?>
<div class="modal-header-modify">
    <h2 class="thongbao" style="margin-left:190px">
        <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao.'<i class="fa-solid fa-check"></i>';
            }
        ?>
    </h2>
    <h2 class="thongbao2" style="margin-left:190px">
        <?php
            if(isset($thongbao2)&&($thongbao2!="")){
                echo $thongbao2;
            }
        ?>
    </h2>
    <h3>Cập nhật tài khoản</h3>

    <?php
        // $listtaikhoan = loadall_taikhoan();
        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
            extract($_SESSION['user']);
            
        }
        
    ?>
    <div class="header_capnhat_tk">

        <form action="index.php?act=edit_taikhoan" method="post">
    
            <div class="modal-input ">
                Email
                <input type="email" name="email" class="modal-input-ueser" value="<?=$email?>" >
            </div>
            <div class="modal-input">
                Tên đăng nhập
                <input type="text" name="user" class="modal-input-ueser" value="<?=$user?>">
            </div>
            <div class="modal-input">
                Mật khẩu
                <input type="password" name="pass" class="modal-input-ueser" value="<?=$pass?>">
            </div>
            <div class="modal-input">
                Địa chỉ
                <input type="text" name="address" class="modal-input-ueser" value="<?=$address?>">
            </div>
            <div class="modal-input">
                Điện thoại
                <input type="text" name="tel" class="modal-input-ueser" value="<?=$tel?>">
            </div>
            
            
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" value="Cập nhật" name="capnhat" class="btn-input">
            <input type="reset" value="Nhập lại" class="btn-input">
            
        </form>
    </div>
</div>
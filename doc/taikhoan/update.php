<?php
    if(is_array($taikhoan)){
        extract($taikhoan);
    } 
?>


<div class="container">
            <div class="content">
                <div class="content_title">
                    CẬP NHẬT TÀI KHOẢN
                </div>
                <div class="content-container">
                <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
                <div class="container_input">
                        <div class="container_input">
                        <select name="id" class="container_input-danhmuc">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                    $listtaikhoan = loadall_taikhoan();
                                    foreach($listtaikhoan as $taikhoan){
                                        extract($taikhoan); 
                                        echo ' <option value="'.$id.'" >'.$user.'</option>';
                                    }
                                        
                            
                                ?>
                            </select>
                        </div>
                        <div class="container_input">
                            <p>Tên tài khoản</p><br>
                            <input type="text"  name="user" id="maloai" value="<?=$user?>" >
                        </div>
                        <div class="container_input">
                            <p>Mật khẩu</p><br>
                            <input type="password"  name="pass" id="maloai"  value="<?=$pass?>">
                        </div>
                        <div class="container_input">
                            <p>Email</p><br>
                            <input type="text"  name="email" id="maloai" value="<?=$email?>">
                            
                        </div>
                        <div class="container_input">
                            <p>Địa chỉ</p><br>
                            <input type="text"  name="address" id="maloai" value="<?=$address?>">
                        </div>
                        <div class="container_input">
                            <p>Điện thoại</p><br>
                            <input type="text"  name="tel" id="maloai" value="<?=$tel?>">
                        </div>
                        <div class="container_input">
                            <p>Vai trò</p><br>
                            <input type="text"  name="role" id="maloai" value="<?=$role?>">
                        </div>

                       
                        <div class="container_input container_btn">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" name="capnhat" value="Cập nhật" class="btn-item">
                            <input type="reset" value="Nhập lại" class="btn-item">
                            <a href="index.php?act=dskh"><input type="button" value="Danh sách" class="btn-item"></a>
                        </div>
                        <?php
                            if(isset($thongbao) && ($thongbao!="")){
                                echo $thongbao; 
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">

        </div>
    </div>
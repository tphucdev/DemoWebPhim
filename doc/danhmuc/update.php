<?php
    if(is_array($dm)){
        extract($dm);
    }
?>


<div class="container">
            <div class="content">
                <div class="content_title">
                    CẬP NHẬT LOAỊ HÀNG HOÁ
                </div>
                <div class="content-container">
                    <form action="index.php?act=updatedm" method="post">
                        <div class="container_input">
                            <p>Mã loại</p><br>
                            <input type="text" id="maloai" name="maloai" disabled>
                        </div>
                        <div class="container_input">
                            <p>Tên loại</p><br>
                            <input type="text" id="maloai" name="tenloai" value="<?php if(isset($name)&& ($name!="")) echo $name;?>" >
                        </div>
                        <div class="container_input container_btn">
                            <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id;?>">
                            <input type="submit" name="capnhat" value="Cập nhập" class="btn-item">
                            <input type="reset" value="Nhập lại" class="btn-item">
                            <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH" class="btn-item"></a>
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
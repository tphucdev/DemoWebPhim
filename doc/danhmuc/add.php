
<div class="container">
            <div class="content">
                <div class="content_title">
                    THÊM MỚI LOAỊ HÀNG HOÁ
                </div>
                <div class="content-container">
                    <form action="index.php?act=adddm" method="post">
                        <div class="container_input">
                            <p>Mã loại</p><br>
                            <input type="text" id="maloai" name="maloai" disabled>
                        </div>
                        <div class="container_input">
                            <p>Tên loại</p><br>
                            <input type="text" id="maloai" name="tenloai" >
                        </div>
                        <div class="container_input container_btn">
                            <input type="submit" name="themmoi" value="THÊM MỚI" class="btn-item">
                            <input type="reset" value="NHẬP LẠI" class="btn-item">
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
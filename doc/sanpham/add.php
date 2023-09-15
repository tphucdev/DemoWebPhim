<div class="container">
            <div class="content">
                <div class="content_title">
                    THÊM MỚI SẢN PHẨM
                </div>
                <div class="content-container">
                    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                        <div class="container_input">
                            <p>Danh mục</p><br>
                            <select name="iddm" class="container_input-danhmuc">
                                <?php
                                    foreach($listdanhmuc as $danhmuc){
                                        extract($danhmuc); 
                                        echo ' <option value="'.$id.'">'.$name.'</option>';
                                    }
                                ?>
                               
                            </select>
                        </div>
                        <div class="container_input">
                            <p>Tên sản phẩm</p><br>
                            <input type="text"  name="tensp" id="maloai">
                        </div>
                        <div class="container_input">
                            <p>Giá</p><br>
                            <input type="text"  name="giasp" id="maloai" >
                        </div>
                        <div class="container_input">
                            <p>Số lượng</p><br>
                            <input type="text"  name="soluong" id="maloai" style="width:300px ;">
                        </div>
                        <div class="container_input">
                            <p>Hình</p><br>
                            <input type="file"  name="hinh" id="maloai"  class="container_input-hinh">
                        </div>
                        <div class="container_input ">
                            <p>Mô tả</p><br>
                            <textarea name="mota" cols="30" rows="10" class="container_input-mota"></textarea>
                        </div>
                        
                        <div class="container_input container_btn">
                            <input type="submit" name="themmoi" value="THÊM MỚI" class="btn-item">
                            <input type="reset" value="NHẬP LẠI" class="btn-item">
                            <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH" class="btn-item"></a>
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
        
    </div>
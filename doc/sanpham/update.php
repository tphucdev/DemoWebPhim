<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }

    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $img="<img src='".$hinhpath."'height='80'>";
    }else{
        $img = "no photo";
    }
   
?>


<div class="container">
            <div class="content">
                <div class="content_title">
                    CẬP NHẬT LOAỊ HÀNG HOÁ
                </div>
                <div class="content-container">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="container_input">
                        <div class="container_input">
                        <select name="iddm" class="container_input-danhmuc">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                    foreach($listdanhmuc as $danhmuc){
                                        extract($danhmuc); 
                                        if($iddm==$id) $s="selected"; else $s="";
                                        echo ' <option value="'.$id.'" '.$s.'>'.$name.'</option>';
                                       
                                    }
                                ?>
                            </select>
                        </div>
                     
                        <div class="container_input">
                            <p>Tên sản phẩm</p><br>
                            <input type="text"  name="name" id="maloai" value="<?=$sanpham['name']?>" >
                        </div>
                        <div class="container_input">
                            <p>Giá</p><br>
                            <input type="text"  name="price" id="maloai"  value="<?=$price?>">
                        </div>
                        <div class="container_input">
                            <p>Hình</p><br>
                            <input type="file"  name="img" id="maloai" class="container_input-hinh">
                            <?=$img?>
                        </div>
                        <div class="container_input ">
                            <p>Mô tả</p><br>
                            <textarea name="mota"  cols="30" rows="10" class="container_input-mota"><?=$mota?></textarea>
                        </div>

                        <div class="container_input container_btn">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" name="capnhat" value="Cập nhật" class="btn-item">
                            <input type="reset" value="Nhập lại" class="btn-item">
                            <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="btn-item"></a>
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
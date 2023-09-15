<?php
    if(is_array($binhluan)){
        extract($binhluan);
    } 
?>


<div class="container">
            <div class="content">
                <div class="content_title">
                    CẬP NHẬT BÌNH LUẬN
                </div>
                <div class="content-container">
                <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
                <div class="container_input">
                        <!-- <div class="container_input">
                        <select name="id" class="container_input-danhmuc">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                    // foreach($listtaikhoan as $taikhoan){
                                    //     extract($taikhoan); 
                                    //     echo ' <option value="'.$id.'" >'.$user.'</option>';
                                    // }
                                        
                            
                                ?>
                            </select>
                        </div> -->
                        <div class="container_input">
                            <p>IDUSER</p><br>
                            <input type="text"  name="iduser" id="maloai" value="<?=$iduser?>" >
                        </div>
                        <div class="container_input">
                            <p>IDPRO</p><br>
                            <input type="text"  name="idpro" id="maloai"  value="<?=$idpro?>">
                        </div>
                        <div class="container_input">
                            <p>NỘI DUNG </p><br>
                            <input type="text"  name="noidung" id="maloai" value="<?=$noidung?>">
                            
                        </div>
                        <div class="container_input">
                            <p>NGÀY BÌNH LUẬN</p><br>
                            <input type="text"  name="ngaybinhluan" id="maloai" value="<?=$ngaybinhluan?>">
                        </div>
                       

                       
                        <div class="container_input container_btn">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" name="capnhat" value="Cập nhật" class="btn-item">
                            <input type="reset" value="Nhập lại" class="btn-item">
                            <a href="index.php?act=dsbl"><input type="button" value="Danh sách" class="btn-item"></a>
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
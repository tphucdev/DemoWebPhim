<div class="row">
    <div class="tk_content" style="margin-left:10px">

        <div class="title title-tk">
            <h1>DANH SÁCH TÀI KHOẢN</h1>
        </div>
        <div class="content_item  content_item-table">
            <div class="loai">
                <table border="1" style="width: 95%; border-collapse: collapse; margin-left:30px;" class="loai_table loai_table-item">
                    <tr style="height: 40px; background-color: #999; " class="table-tk">

                        <th >Mã tài khoản</th>
                        <th style="width: 150px;">Tên đăng nhập</th>
                        <th style="width: 150px;">Mật khẩu</th>
                        <th style="width: 250px;">Email</th>
                        <th style="width: 100px;">Địa chỉ</th>
                        <th  style="width: 100px;">Điện thoại</th>
                        <th>Vai trò</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                        // $listtaikhoan = loadall_taikhoan();
                        foreach($listtaikhoan as $taikhoan){
                            extract($taikhoan);
                            $suatk = "index.php?act=suatk&id=".$id;
                            $xoatk = "index.php?act=xoatk&id=".$id;

                            echo '
                            <tr style="height: 40px;" class="tr" >
                                
                                <td >'.$id.'</td>
                                <td>'.$user.'</td>
                                <td><input type="password" value="'.$pass.'" class="input-pass_admin" disabled></td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$role.'</td>
                                
                                <td >
                                    <div class="btn-input-tk">
                                        <a href="'. $suatk.'" > <input type="button" value="Sữa" class="td_input" style="margin:0 20px ; width:60px; height:26px; border-radius:4px;"></a>
                                        ';
                                    if($role!=1){
                                        echo'<a href="'.$xoatk.'" > <input type="button" value="Xóa" class="td_input" style="margin:0 20px ; width:60px; height:26px; border-radius:4px;"></a>
                                        </div>
                                    </td>
                                    
                                </tr>'; }

                        }
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
</div>
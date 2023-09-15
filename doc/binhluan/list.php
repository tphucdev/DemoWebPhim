<div class="row">
     <div class="tk_content">
        <div class="title title-tk-item">
            <h1>DANH SÁCH PHẢN HỒI</h1>
        </div>
        <div class="content_item">
        <div class="loai">
            <table border="1" style="width: 90%; border-collapse: collapse;" class="table-binhluan">
                <tr style="height: 40px; background-color: #999; " class="table-binhluan-item">
                    <th style="width: 30px;"></th>
                    <th style="width: 50px;">ID</th>
                    <th style="width: 250px;">NỘI DUNG BÌNH LUẬN</th>
                    <th style="width: 150px;">TÊN USER</th>
                    <th style="width: 60px;">IDPRO</th>
                    <th style="width: 250px;">NGÀY BÌNH LUẬN</th>
                    <th>THAO TÁC</th>
                    <th></th>
                </tr>
                    <?php
                        // $listtaikhoan = loadall_taikhoan();
                        foreach($listbinhluan as $binhluan){
                            extract($binhluan);
                            $tk_user_bl=loadone_tenuser_binhluan($iduser);
                            extract($tk_user_bl);
                            $xoabl = "index.php?act=xoabl&id=".$id;

                            echo '
                            <tr style="height: 40px;" class="tr" >
                                <td style="width: 100px; "><input type="checkbox"></td>
                                <td >'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$user.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                
                            

                                <td>
                                    <a href="'.$xoabl.'" > <input type="button" value="Xóa" class="td_input" style="margin:0 20px ; width:60px; height:26px; border-radius:4px;"></a>
                                </td>
                            </tr>'; 

                        }
                    ?>
                
            </table>
        </div>
        
        </div>
    </div>
</div>
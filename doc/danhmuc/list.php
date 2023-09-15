<div class="row tk_content">
                    <div class="title">
                        <h1>DANH SÁCH LOẠI HÀNG</h1>
                    </div>
                    <div class="content_item">
                       <div class="loai">
                           <table border="1" style="width: 90%; border-collapse: collapse;">
                               <tr style="height: 40px; background-color: #999; " class="loai-dshh">
                                   <th ></th>
                                   <th >Mã loại </th>
                                   <th>Tên loại</th>
                                   <th>Thao tác</th>
                                   <th></th>
                               </tr>
                                <?php
                                    foreach($listdanhmuc as $danhmuc){
                                        extract($danhmuc);
                                        $suadm = "index.php?act=suadm&id=".$id;
                                        $xoadm = "index.php?act=xoadm&id=".$id;

                                        echo '
                                        <tr style="height: 40px;" class="tr" >
                                        <td style="width: 100px; "><input type="checkbox"></td>
                                        <td >'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>
                                            <a href="'. $suadm.'" > <input type="button" value="Sữa" class="td_input" style="margin:0 20px ; width:60px; height:26px; border-radius:4px;"></a>
                                            <a href="'.$xoadm.'" > <input type="button" value="Xóa" class="td_input" style="margin:0 20px ; width:60px; height:26px; border-radius:4px;"></a>
                                         </td>
                                    </tr>'; 

                                    }
                                ?>
                               
                           </table>
                       </div>
                       <div class="row-btn">
                           <input type="button" value="Chọn tất cả" class="input_btn">
                           <input type="button" value="bỏ chọn tất cả" class="input_btn">
                           <input type="button" value="Xóa các mục đã chọn" class="input_btn">
                           <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" class="input_btn"></a> 
                       </div>
                    </div>
                </div>
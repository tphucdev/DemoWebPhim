<div class="row tk_content" >
                    <div class="title">
                        <h1>DANH SÁCH ĐƠN HÀNG</h1>
                    </div>
                    <div class="content_item">
                       <div class="loai">
                            <form action="index.php?act=listbill" method="post" class="search-dsdh">
                                <input type="text" name="kyw"  class="container_input-danhmuc" placeholder="Nhập mã đơn hàng">
                                <input type="submit" name="listok" value="Go" class="input_btn-item" >
                            </form>
                           <table border="1" style="width: 90%; border-collapse: collapse;" class="loai-table-bill">
                               <tr style="height: 40px; background-color: #999; ">
                                   <th ></th>
                                   <th >Mã đơn hàng </th>
                                   <th style="width: 200px;">Khách hàng</th>
                                   <th>Số lượng hàng</th>
                                   <th>Gía trị đơn hàng</th>
                                   <th>Tình trạng đơn hàng</th>
                                   <th>Ngày đặt hàng</th>
                                   <th>Thao tác</th>
                                   <th></th>
                               </tr>
                                <?php
                                    $listbill=loadall_bill($kyw,0);
                                    foreach($listbill as $bill){
                                        extract($bill);
                                        // $sualistbill = "index.php?act=sualistbill&id=".$id;
                                        $xoalistbill = "index.php?act=xoalistbill&id=".$id;

                                        $kh=$bill["bill_name"].'
                                        <br> '.$bill["bill_email"].'
                                        <br> '.$bill["bill_address"].'
                                        <br> '.$bill["bill_tel"];
                                        $ttdh=get_ttdh($bill['bill_status']);
                                        $countsp=loadall_cart_count($bill["id"]);
                                       
                                        echo '
                                            <tr style="height: 40px;" class="tr" >
                                            <td style="width: 100px; "><input type="checkbox"></td>
                                            <td style="width: 100px;">DAM-'.$bill['id'].'</td>
                                            <td >'.$kh.'</td>
                                            <td>'.$countsp.'</td>
                                            <td>'.$bill["total"].'đ</td>
                                            <td>'.$ttdh.'</td>
                                            <td>'.$bill["ngaydathang"].'</td>
                                            <td>
                                                <a href="'.$xoalistbill.'" > <input type="button" value="Xóa" class="td_input" style="margin:0 20px ; width:60px; height:26px; border-radius:4px;"></a>
                                            </td>
                                    </tr>'; 

                                    }
                                ?>
                               
                           </table>
                       </div>
                       <div class="row-btn row-btn-item">
                           <input type="button" value="Chọn tất cả" class="input_btn">
                           <input type="button" value="bỏ chọn tất cả" class="input_btn">
                           <input type="button" value="Xóa các mục đã chọn" class="input_btn">
                       </div>
                    </div>
                </div>
<div class="row tk_content tk_content-item">
                    <div class="title">
                        <h1>DANH SÁCH LOẠI HÀNG</h1>
                    </div>
                    <div class="content_item">
                       <div class="loai">
                            <form action="index.php?act=listsp" method="post">
                                <input type="text" name="kyw" id="" class="container_input-danhmuc">
                            <select name="iddm" class="container_input-danhmuc">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                    foreach($listdanhmuc as $danhmuc){
                                        extract($danhmuc); 
                                        echo ' <option value="'.$id.'">'.$name.'</option>';
                                    }
                                ?>
                            </select>
                            <input type="submit" name="listok" value="Go" class="input_btn-item" >
                            </form>
                           <table border="1" style="width: 90%; border-collapse: collapse;" class="table-sp">
                               <tr style="height: 40px; background-color: #999; ">
                                   <th style="width: 30px;" ></th>
                                   <th style="width: 70px;">Mã loại </th>
                                   <th style="width: 200px;">TÊN SẢN PHẨM</th>
                                   <th>HÌNH</th>
                                   <th style="width: 150px;">GIÁ</th>
                                   <th style="width: 70px;">LƯỢT XEM</th>
                                   <th style="width: 70px;">Số lượng</th>
                                   <th></th>
                               </tr>
                                <?php
                                    foreach($listsanpham as $sanpham){
                                        extract($sanpham);
                                        $suasp = "index.php?act=suasp&id=".$id;
                                        $xoasp = "index.php?act=xoasp&id=".$id;


                                        $hinhpath="../upload/".$img;
                                        if(is_file($hinhpath)){
                                            $hinh="<img src='".$hinhpath."'height='80'>";
                                        }else{
                                            $hinh = "no photo";
                                        }

                                        echo '
                                            <tr style="height: 40px;" class="tr" >
                                            <td style="width: 100px; "><input type="checkbox"></td>
                                            <td >'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$hinh.'</td>
                                            <td>'.$price.'</td>
                                            <td>'.$luotxem.'</td>
                                            <td>'.$soluong.'</td>
                                            <td>
                                                <div class="btn-input-tk">
                                                    <a href="'. $suasp.'" > <input type="button" value="Sữa" class="td_input" style="margin:0 20px ; width:60px; height:26px; border-radius:4px;"></a>
                                                    <a href="'.$xoasp.'" > <input type="button" value="Xóa" class="td_input" style="margin:0 20px ; width:60px; height:26px; border-radius:4px;"></a>
                                                </div>
                                            </td>
                                    </tr>'; 

                                    }
                                ?>
                               
                           </table>
                       </div>
                       <div class="row-btn row-btn-btn-item">
                           <input type="button" value="Chọn tất cả" class="input_btn">
                           <input type="button" value="bỏ chọn tất cả" class="input_btn">
                           <input type="button" value="Xóa các mục đã chọn" class="input_btn">
                           <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" class="input_btn"></a> 
                       </div>
                    </div>
                </div>
<div class="row">
    <div class="tk_content" style="margin-left:5px;"> 

        <div class="title" style="width:96%;">
            <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
        </div>
        <div class="content_item">      
           <div class="loai">
                
               <table border="1" style="width: 90%;border-collapse: collapse; margin-left:40px; height:40px;" >
                   <tr style="height: 40px; background-color: #999; ">
                       <th ></th>
                       <th >Mã danh mục</th>
                       <th style="width: 250px;">Tên danh mục</th>
                       <th>Số lượng</th>
                       <th style="width: 250px;">Giá cao nhất</th>
                       <th style="width: 250px;">Gía thấp nhất</th>
                       <th style="width: 250px;">Giá trung bình</th>
                       <th></th>
                   </tr>
                   <?php
                        foreach($listthongke as $thongke){
                            extract($thongke);
                            
                            echo'
                            <tr>
                               <td></td>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'đ</td>
                                <td>'.$minprice.'đ</td>
                                <td>'.$avgprice.'đ</td>
                            </tr>
                            ';
                        }
    
                   ?>
               </table>
           </div>
           <div class="row-btn row-btn-item">
               <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đổ" class="input_btn"></a> 
           </div>
        </div>
    </div>
</div>
<?php

    function updatesoluong($vitri){
        for($i=0;$i < sizeof($_SESSION['mycart']);$i++){
            if($i==$vitri){
                $_SESSION['mycart'][$i]['soluong'] +=1;
            }
        }
    }

    function viewcart(){
        global $img_path;
        $tong=0;
        $i=0;
        foreach ($_SESSION['mycart'] as $cart) {
            $hinh=$img_path.$cart[2];
            $ttien=$cart[3] * $cart[4];
            $tong=$tong+$ttien;
            $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xoá"></a>';
            echo '<tr>
                    <td></td>
                    <td class="giohang_img"><img src="'.$hinh.'" alt="" class="giohang_img-item"></td>
                    <td>'.$cart[1].'</td>
                    <td>'.$cart[3].' VNĐ</td>
                    <td>'.$cart[4].'</td>
                    <td>'.$ttien.' VNĐ</td>
                    <td>'.$xoasp.'</td>
                </tr>';
            $i+=1;
        }
        echo '<tr >
                <td></td>
                <td colspan="4">Tổng đơn hàng</td>
                <td>'.$tong.' VNĐ</td>
                 <td></td>
            </tr>';
    }






    function bill_chi_tiet($listbill){
        global $img_path;
        $tong=0;
        $i=0;
        foreach ($listbill as $cart) {
            $hinh=$img_path.$cart['img'];
            $tong=$tong+$cart['thanhtien'];
            echo '<tr>
                    <td></td>
                    <td class="giohang_img"><img src="'.$hinh.'" alt="" class="giohang_img-item"></td>
                    <td>'.$cart['name'].'</td>
                    <td>'.$cart['price'].'</td>
                    <td>'.$cart['soluong'].'</td>
                    <td>'.$cart['thanhtien'].' VNĐ</td>
                </tr>';
            $i+=1;
        }
        echo '<tr >
                <td></td>
                <td colspan="4">Tổng đơn hàng</td>
                <td>'.$tong.' VNĐ</td>
                <td></td>
            </tr>';
    }



    function tongdonhang(){
        $tong=0;
        foreach ($_SESSION['mycart'] as $cart) {
            $ttien=$cart[3] * $cart[4];
            $tong=$tong+$ttien;
        }
        return $tong;
    }


  

    function insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
        $sql="insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
        $sql="insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }
    function loadone_bill($id){
        $sql="select * from bill where id=".$id;
        $bill=pdo_query_one($sql);
        return $bill;
    }

    function loadall_cart($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return $bill;
    }

    function loadall_cart_count($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return sizeof($bill);
    }


    // function loadall_bill($kyw="",$iduser=0){
        
    //     $sql="select * from bill where 1";
    //     if($iduser>0) $sql.=" AND iduser=".$iduser;
    //     if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
    //     $sql.=" order by id desc";
    //     $listbill=pdo_query($sql);
    //     return $listbill;
    // }

    function loadall_bill($kyw="",$iduser=0){
        $sql="select * from bill where 1";
        if(($iduser>0)) $sql.=" AND iduser=".$iduser;
        if(($kyw!="")) $sql.=" AND id like '%".$kyw."%'";
        $sql.=" order by id desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }

    function loadall_bill_item($iduser){
        $sql="select * from bill where iduser=".$iduser;
        $bill=pdo_query($sql);
        return $bill;
    }

    function delete_usercart($iduser){
        $sql="delete from cart where iduser=".$iduser;
        pdo_execute($sql);
    }




    function get_ttdh($n){
        switch ($n){
            case 0:
                $tt="Đơn hàng mới";
                break;
            case 1:
                $tt="Đang xữ lý";
                break;
            case 2:
                $tt="Đang giao hàng";
                break;
            case 4:
                $tt="Hoàn tất";
                break;
            default:
                $tt="Đơn hàng mới";
                break;
        }
        return $tt;
    }

    function get_pttt($n){
        switch ($n){
            case 1:
                $tt="Thanh toán khi nhận hàng";
                break;
            case 2:
                $tt="Thanh toán qua ngân hàng";
                break;
            case 3:
                $tt="Thanh toán online";
                break;
            default:
                $tt="Thanh toán khi nhận hàng";
                break;
        }
        return $tt;
    }
    //list bill admin
    // function loadall_listbill($kyw="",$id=0){
    //     $sql="select * from bill where 1 ";
    //     if($kyw!=""){
    //         $sql.=" and name like '%".$kyw."%'";
    //     }
    //     if($id>0){
    //         $sql.=" and id ='".$id."'";
    //     }
    //     $sql.=" order by id desc";
    //     $listbill = pdo_query($sql);
    //     return $listbill; 
    // }


    function loadall_thongke(){
        $sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
        $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
        $sql.=" group by danhmuc.id order by danhmuc.id desc";
        $listthongke=pdo_query($sql);
        return $listthongke;
    }


  
?>
<?php
    include "../model/pdo.php"; 
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
    include "header.php";
    //contrller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case 'adddm':
                //kiểm tra xem người dùng có clcik vào nut add hay ko
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công";
                }
                include "danhmuc/add.php"; 
                break;
            case 'listdm':
                $listdanhmuc = loadall();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if((isset($_GET['id']))&& ($_GET['id'] > 0)){
                    $sql="delete from danhmuc where id=".$_GET['id'];
                    pdo_execute($sql);
                }
                $listdanhmuc = loadall();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $sql = "select * from danhmuc where id=".$_GET['id'];
                    $dm = pdo_query_one($sql);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    $sql="update danhmuc set name='".$tenloai."' where id=".$id;
                    pdo_execute($sql);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc = loadall();
                include "danhmuc/list.php";
                break;


                //controller sản phẩm
            case 'addsp':
                //kiểm tra xem người dùng có clcik vào nut add hay ko
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $soluong=$_POST['soluong'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                        // echo "Sorry, there was an error uploading your file.";
                        }
                    insert_sanpham($tensp,$iddm,$giasp,$hinh,$mota,$soluong);
                    $thongbao="Thêm thành công";
                }
                $listdanhmuc = loadall();
                include "sanpham/add.php"; 
                break;
            case 'listsp':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc = loadall();
                $listsanpham = loadall_sanpham($kyw,$iddm);
                // $list_sl_sanpham=loadall_sanpham_soluong($iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $sql ="delete from cart where idpro=".$_GET['id'];
                    pdo_execute($sql);
                    $sql="delete from sanpham where id=".$_GET['id'];
                    pdo_execute($sql);
                }
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall();
                include "sanpham/update.php";
                break;
            

                case 'updatesp':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $iddm=$_POST['iddm'];
                        $name=$_POST['name'];
                        $price=$_POST['price'];
                        $mota=$_POST['mota'];
                        $img=$_FILES['img']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        if (move_uploaded_file($_FILES["img"]["name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                            } else {
                            // echo "Sorry, there was an error uploading your file.";
                            }
                        update_sanpham($id,$name,$iddm,$price,$mota,$img);
                        $thongbao="Cập nhật thành công";
                    }
                    $listdanhmuc = loadall();
                    $listsanpham = loadall_sanpham();
                    include "sanpham/list.php";
                    break;

                // Controller Khách hàng
                case 'dskh':
                    
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
                case 'listtk':
                    if(isset($_POST['listok']) && ($_POST['listok'])){
                        $kyw=$_POST['kyw'];
                        $iddm=$_POST['iddm'];
                    }else{
                        $kyw='';
                        $iddm=0;
                    }
                    $listdanhmuc = loadall();
                    $listsanpham = loadall_sanpham($kyw,$iddm);
                    include "sanpham/list.php";
                    break;
                case 'xoatk':
                    if((isset($_GET['id']))&& ($_GET['id'] > 0)){
                        $delete = delete_userbinhluan($_GET['id']);
                        delete_usercart($_GET['id']);
                        $sql="delete from taikhoan where id=".$_GET['id'];
                        pdo_execute($sql);
                    }
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
                
                    case 'suatk':
                        if(isset($_GET['id']) && ($_GET['id'] > 0)){
                            $sql = "select * from taikhoan where id=".$_GET['id'];
                            $taikhoan = pdo_query_one($sql);
                        }
                        include "taikhoan/update.php";
                        break;
                case 'updatetk':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $role=$_POST['role'];
                        update_taikhoan($id,$user,$pass,$email,$address,$tel);
                        $thongbao="Cập nhật thành công";
                    }
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;


                    // controller bình luận
                case 'dsbl':
                    $listbinhluan=loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'xoabl':
                    if((isset($_GET['id']))&& ($_GET['id'] > 0)){
                        $sql="delete from binhluan where id=".$_GET['id'];
                        pdo_execute($sql);
                    }
                    $listbinhluan = loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'listbill':
                    if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                        $kyw=$_POST['kyw'];
                    }else{
                        $kyw="";
                    }
                    $listbill=loadall_bill($kyw,0);
                    include "bill/listbill.php";
                    break;
                // case 'xoalistbill':
                //     if(isset($_GET['id']) && ($_GET['id'] > 0)){
                //         $sql="delete from bill where id=".$_GET['id'];
                //         pdo_execute($sql);
                //     }
                //     include "bill/listbill.php";
                //     break;

                case 'thongke':
                    $listthongke=loadall_thongke();
                    include "thongke/list.php";
                    break;
                case 'bieudo':
                    $listthongke=loadall_thongke();
                    include "thongke/bieudo.php";
                    break;
                case 'xoalistbill':
                    if((isset($_GET['id']))&& ($_GET['id'] > 0)){
                        $sql="delete from cart where idbill=".$_GET['id'];
                        pdo_execute($sql);
                        $sql="delete from bill where id=".$_GET['id'];
                        pdo_execute($sql);
                    }
                    include "bill/listbill.php";
                    break;
                default:
                    include "home.php";
                    break;
        }
    }else{
        include "home.php";
    }

    
    include "footer.php";
?> 
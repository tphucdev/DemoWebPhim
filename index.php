<?php
    session_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "model/cart.php";
    include "view/header.php";
    include "global.php";
    
    if(!isset(  $_SESSION['mycart']))   $_SESSION['mycart']=[];
    


    $spnew=loadall_sanpham_home();
    $dsdm=loadall();
    $dstop10=loadall_sanpham_top10();
    if((isset($_GET['act'])) && ($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            case 'cuahang':
                if(isset($_POST['kyw']) && ($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm=load_ten_dm($iddm);
                include "view/cuahang.php";
                break;  
            // case 'cuahang':
            //     if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
            //         $iddm=$_GET['iddm'];
            //         $dssp=loadall_sanpham("",$iddm);
            //         $tendm=load_ten_dm($iddm);
            //         include "view/cuahang.php";
            //     }else{
            //         include "view/home.php";
            //     }
            //     break;
           
            case 'sanphamct':
                if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai=load_sanpham_cungloai($id,$iddm);
                    $tendm=load_ten_dm($iddm);
                    /// add lượt xem 
                    $luotxem=loadone_sp_luotxem($id);
                    extract($luotxem);
                    $luotxem+=1;
                    update_sanpham_luotxem($id,$luotxem);
                    //
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                break;
           
            case 'dangky':
                if(isset($_POST['dangky']) && ($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $token = rand(100000,999999);
                    // insert_taikhoan($email,$user,$pass);
                    // $thongbao="Đã đăng ký thành công ";
                    if(is_array(checkemail($email))){
                        echo'<script>alert("Email đã được đăng ký ")</script>';
                        include "view/taikhoan/dangky.php";
                    }else{
                        insert_taikhoan($email,$user,$pass,$address, $tel,$token); 
                        xacnhanmk($email,$token);
                        include "view/taikhoan/xacnhandk.php";
                    }
                }else{
                    include "view/taikhoan/dangky.php";
                }
                break;
            case 'xacnhandk':
                if(isset($_POST['xacnhandk']) && ($_POST['xacnhandk'])){
                    if($_POST['maxacnhan']==""){
                        $thongbao='Bạn chưa nhập mã xác nhận <i class="fa-solid fa-triangle-exclamation fa-solid_error"></i>';
                    }else{
                        $checkxacnhan = checkuser_role($_POST['maxacnhan']);
                        if(is_array($checkxacnhan)){
                            phanquyen_role($_POST['maxacnhan']);     
                            extract( phanquyen_role($_POST['maxacnhan']));
                            $thongbao='Đã đăng ký thành công <i class="fa-solid fa-check"></i>';
                            $role = 3;
                            update_role($_POST['maxacnhan'],$role);
                            update_token($_POST['maxacnhan']);
                        }else{
                            $thongbao='Mã xác nhận không hộp lệ <i class="fa-solid fa-triangle-exclamation fa-solid_error"></i>';
                            delete_role_0();
                        }
                    }
                }
                include "view/taikhoan/xacnhandk.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass); 
                    if(is_array($checkuser) ){
                        $_SESSION['user']=$checkuser;
                        echo ' <Script>window.location.href="index.php"</Script>';
                    }else{
                        // echo ' <Script>window.location.href="index.php"</Script>';
                        echo'<script>alert("Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký ")</script>';
                        // $thongbao2="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký";
                    }
                }
                include "view/taikhoan/dangky.php";// new ko load dc hàm header location thì nó chuyển qua dk tài khoản
                break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    // include "view/taikhoan/edit_taikhoan.php";
                    // header('Location: index.php?act=edit_taikhoan');
                    // include "view/taikhoan/edit_taikhoan.php";//khong load dc moi dung
                    // echo ' <Script>window.location.href="index.php?act=edit_taikhoan"</Script>';
                    $thongbao = "Cập nhật tài khoản thành công";
                }
                
                include "view/taikhoan/edit_taikhoan.php";
                break;

                
            case 'quenmk':
                //Email trống
                
                if(isset($_POST['guiemail']) && ($_POST['guiemail'])){
                    
                    $email=$_POST['email'];
                    if($email==""){
                        $thongbao='Bạn chưa nhập email <i class="fa-solid fa-triangle-exclamation fa-solid_error"></i>';
                    }else{
                        $checkemail=checkemail($email);
                        if(is_array($checkemail)){
                            if(isset($email) && $email){
                            // $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                            // $matkhaumoi = substr(md5(rand(0,999999)),0,8);
                            // update_pass($email,$matkhaumoi);
                            $thongbao = "Mật khẩu đã được gửi qua email của bạn";
                            Guilaimk($email,$checkemail['pass']);
                            }else{
                                $thongbao='Bạn chưa nhập email <i class="fa-solid fa-triangle-exclamation fa-solid_error"></i>';
                            }
                        }else{
                            $thongbao='Email nay chưa được đăng ký <i class="fa-solid fa-triangle-exclamation fa-solid_error"></i>';
                        }
                    }
                }

                ///

                include "view/taikhoan/quenmk.php";
                break;

            case 'thoat':
                session_unset();
                echo ' <Script>window.location.href="index.php"</Script>';
                break;
            case 'dangnhaptk':
                include "view/taikhoan/dangnhaptk.php";
                break;


                //controller giỏ hàng
            case 'addtocart':
                //add thông tin sp từ cái form add to cart dến session   
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    // $soluong=$_POST['soluong'];
                    // $soluong=1;
                    if(isset($_POST['soluong']) && ($_POST['soluong']>0)){
                        $soluong=$_POST['soluong'];
                    }else{
                        $soluong=1;
                    }
                    $ttien=$soluong * $price;
                    $value=$_POST['amount'];
                    $i=0;
                    $fg=0;
                    // Khi chọn số lượng thì thêm vao giò hàng
                   
                
                    // cập nhật lại số lượng sản phẩm khi chọn mua trùng nhau
                    if(isset($_SESSION['mycart']) && (count($_SESSION['mycart'])>0)){
                        foreach($_SESSION['mycart'] as $cart) {
                            if($cart[0]==$id){
                                // Cập nhật mới số lượng
                                $soluong+=$cart[4];
                                $fg=1;
                                // Cập nhật số lượng mới vào giỏ hàng
                                $_SESSION['mycart'][$i][4]=$soluong;
                                break;
                            }
                            $i++;
                        }
                    }
                    //Khi số lượng ban đầu không thay đổi thì thêm mới vào giỏ hàng
                    if($fg==0){
                        $sppadd=[$id,$name,$img,$price,$soluong,$ttien];
                        array_push($_SESSION['mycart'],$sppadd);
                    }
 
                    echo'<script>window.location.href="header"</script>';
                }
                include "view/cart/viewcart.php";    
                break;

            case 'delcart':
                if(isset($_GET['idcart'])){
                    // array_slice($_SESSION['mycart'],$_GET['idcart'],1,true);
                    unset($_SESSION['mycart'][$_GET['idcart']]);
                }else{
                    $_SESSION['mycart']=[];
                }
                echo'<script>window.location.href="viewcart"</script>';
                break;
            case 'bill':
                // Mua với số lượng hợp lý
                if(isset($_SESSION['mycart']) && ($_SESSION['mycart'])){
                    foreach($_SESSION['mycart'] as $cart) {
                        $listsanpham = loadone_sanpham_mua($cart[0]);
                        extract($listsanpham);                        
                        // extract($cart);
                        if($cart[4]>$soluong){
                            echo'<script>alert("Số lượng không đủ! Vui lòng kiểm tra lai giỏ hàng")</script>';
                            echo'<script>window.location.href="viewcart"</script>';
                        }
                        // }
                    }
                }else{
                    echo'<script>alert("Giỏ hàng trống! Vui lòng chọn sản phẩm")</script>';
                    echo'<script>window.location.href="viewcart"</script>';
                    // $thongbao_mua="Giỏ hàng đang trống! vui lòng chọn sản phâm mua";
                }
                include "view/cart/bill.php";
                break;

            case 'billcomfirm':
                // Tạo đơn hàng
                if(!isset($_SESSION['user'])){
                    echo'<script>alert("Vui lòng đăng nhập tài khoản")</script>';
                    echo'<script>window.location.href="viewcart"</script>';
                }
                if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
                    if(isset($_SESSION['user']))  $iduser=$_SESSION['user']['id'];
                    else $id=0;
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $pttt=$_POST['pttt'];
                    $ngaydathang=date('h:i:sa d/m/Y');
                    $tongdonhang=tongdonhang();
                    $idbill=insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);
                    foreach($_SESSION['mycart'] as $cart){
                        insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                        // khi mua xong thì trừ số luong mua với trong kho
                      
                        
                    }
                    if(isset($_SESSION['mycart']) && ($_SESSION['mycart'])){
                        foreach($_SESSION['mycart'] as $cart) {
                            $listsanpham = loadone_sanpham_mua($cart[0]);
                            extract($listsanpham);                        
                            // extract($cart);
                            $soluong = $soluong - $cart[4];
                            update_sanpham_sl($cart[0],$soluong);
                            }
                        }
                                      
                    //khi đặt hàng xong thì xóa
                    $_SESSION['mycart']=[];
                }
                // echo'<script>window.location.href="viewcart"</script>';
                $bill=loadone_bill($idbill);
                $billct=loadall_cart($idbill);
                include "./view/cart/billcomfirm.php";
                break;

            case 'mybill_2':
                // $listbill=loadall_bill($_SESSION['user']['id']);
                $listbill=loadall_bill_item($_SESSION['user']['id']);
                include "view/cart/mybill_2.php";
                break;
            
            default:
                include "view/home.php";
                break;          
        }
    }
    else{
        include "view/home.php";
    }
    
    include "view/footer.php";
?>
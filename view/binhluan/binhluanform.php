<?php

    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";


    $idpro=$_REQUEST['idpro'];
    $dsbl= loadall_binhluan($idpro);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">

    </head>
<body>
    
<div class="col l-9 m-8 c-12">
     <div class="sanpham_binhluan">
         <div class="sanphamct_binhluan" >
             <div class="sanphamct_title" >
                 <h1>BÌNH LUẬN</h1>
             </div>
             <div class="btn_binluan">
                 <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="btn_binhluan-form">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    <input type="text" name="noidung" class="input_binhluan-noidung">
                    <input type="submit" name="guibinhluan" value="Gừi bình luận" class="input_binhluan-btn">
                 </form>
             </div>
             <div class="sanphamct_content binhluan_table">
                <table>
                   
                    <?php

                        // foreach ($dstenuser as $tenuser) {
                        //     extract($tenuser);
                        //     echo'<span>'.$user.'</span>';
                        // }

                        if(isset($_SESSION['user'])){            
                            foreach ($dsbl as $bl) {
                                extract($bl);
                                $tk_user_bl=loadone_tenuser_binhluan($iduser);
                                extract($tk_user_bl);
                                // echo '<td >'.$iduser.'</td>';
                                // echo '<tr><td >'.$noidung.'</td>';
                                // echo '<td class="ngaybinhluan">'.$ngaybinhluan.'</td></tr>';
                                echo'<div class="noidung_binhluan">
                                <div class="noidung_binhluan_content">
                                    <span><div class="id_img_user">
                                                <div class="fa-user-binhluan">
                                                    <i class="fa-solid fa-user fa-user-icon fa-user-binhluan-icon"></i>
                                                </div>
                                                
                                                <span>'.$user.'</span>
                                            </div>
                                        </span>
                                    <span>'.$ngaybinhluan.'</span>
                                </div>
                                <div class="noidung_binhluan_user">
                                    '.$noidung.'
                                </div>
                            </div>';
                            }
                        }else{
                            echo'<span class="comment" >Vui lòng đăng nhập tài khoản, để có thể bình luận ở đây!!</span>';
                        }
                        ?>
                        

                </table>
             </div>
         </div>
     </div>           

     <?php
        if(isset($_SESSION['user'])){
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                $noidung=$_POST['noidung'];
                $idpro=$_POST['idpro'];
                $iduser=$_SESSION['user']['id'];
                $ngaybinhluan=date('h:i:sa d/m/Y') ;
                insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                // trả về trang hiện tại sẽ trở về
                echo '<script>window.location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';
            }
        }
     ?>
</div>


</body>
</html>
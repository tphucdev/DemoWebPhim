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
    
</body>
</html>
<div class="modal-header-modify">
    <h3>Xác nhận Email</h3>
    
    <h2 class="thongbao thongbao_xacnhan">
        <?php
        
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
    </h2>
    <h2 class="thongbao2">
        <?php
            if(isset($thongbao2)&&($thongbao2!="")){
                echo $thongbao2;
            }
        ?>
    </h2>
    <form action="index.php?act=xacnhandk" method="post" class="modal-modify-dangky modal-modify-xacnhan">

        <div class="modal-input">
            Mã xác nhận*
            <input type="text" name="maxacnhan" class="modal-input-ueser" placeholder="Nhập mã xác nhận">
        </div>
        
        <!-- <div class="modal-input">
            Xác nhận lại mật khẩu*
            <input type="text" class="modal-input-ueser" placeholder="Confirm Password">
        </div> -->
        <input type="submit" value="Xác nhận" name="xacnhandk" class="btn-input">
        <input type="reset" value="Nhập lại" class="btn-input">
        
       
    </form>
                           
</div>
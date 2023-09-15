<div class="modal-header-modify" style="">
    <h3>Quên mật khẩu</h3>
    <h2 class="thongbao" style="margin-top:30px;tex-align:center;margin-left:200px;">
            <?php
                if(isset($thongbao) && ($thongbao!="")){
                    echo'<i>'.$thongbao.'</i>'; 
                }
            ?>
        </h2>
    <form action="index.php?act=quenmk" method="post" >
    <div class="form_dk" style="margin-left: 200px;">

        <div class="modal-input">
            Email
            <input type="email" name="email" class="modal-input-ueser" placeholder="Nhập email của bạn">
        </div>
        
        <input type="submit" value="Gửi" name="guiemail" class="btn-input">
        <input type="reset" value="Nhập lại" class="btn-input">
        
    </div>
        
    </form>
    
</div>
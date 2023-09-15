<?php
    function insert_taikhoan($email,$user,$pass,$address,$tel,$token){
            $sql="insert into taikhoan(email,user,pass,address,tel,token) values('$email','$user','$pass','$address','$tel','$token') ";
            pdo_execute($sql);
        }


    function checkuser($user,$pass){
        $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    

    function update_taikhoan($id,$user,$pass,$email,$address,$tel){
        $sql="update taikhoan set user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;
        pdo_execute($sql);
    }

    function update_pass($email,$pass){
        $sql="update taikhoan set pass='".$pass."' where email=".$email;
        pdo_execute($sql);
    }

    function checkemail($email){
        $sql="select * from taikhoan where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function checkuserdangnhap($user){
        $sql="select * from taikhoan where user='".$user."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }


    function loadall_taikhoan(){
        $sql="select * from taikhoan order by id desc ";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan; 
    }

    function delete_taikhoan($id){
        $sql="delete from taikhoan where id=".$id;
        pdo_execute($sql);
    }

    function loadone_taikhoan($id){
        $sql="select * from taikhoan where id=".$id;
        $taikhoan=pdo_query_one($sql);
        return $taikhoan;
    }

    function checkuser_role($token){
        $sql="select * from taikhoan where token=".$token;
        $sp_role=pdo_query_one($sql);
        return $sp_role;
    }

    function phanquyen_role($token){
        $sql="select taikhoan.role as role from taikhoan where token=".$token;
        $sp_role=pdo_query_one($sql);
        return $sp_role;
    }



    function dangnhap($user){
        $sql="select taikhoan.role as role from taikhoan where user=".$user;
        $sp_role=pdo_query_one($sql);
        return $sp_role;
    }

    function update_role($token,$role){
        $sql="update taikhoan set role='".$role."' where token=".$token;
        pdo_execute($sql);
    }
    function update_token($token){
        $sql="update taikhoan set token=0 where token=".$token;
        pdo_execute($sql);
    }

    function delete_role_0(){
        $sql="delete from taikhoan where role=0";
        pdo_execute($sql);
    }


   
    function Guilaimk($email,$pass){
        require "PHPMailer-master/src/PHPMailer.php"; 
        require "PHPMailer-master/src/SMTP.php"; 
        require 'PHPMailer-master/src/Exception.php'; 
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = '20004154@st.vlute.edu.vn'; // SMTP username
            $mail->Password = 'rybzwwilembcrkax';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('20004154@st.vlute.edu.vn', 'Shop shoes' ); 
            $mail->addAddress($email); 
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Thư gửi lại mật khẩu';
            $noidungthu = '<p style="font-size:20px;">Mật khẩu của bạn là: <span style="font-weight:600;">'.$pass.'</span></p>'; 
            $mail->Body = $noidungthu;
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            echo 'Đã gửi mail xong';
        } catch (Exception $e) {
            echo 'Error: ', $mail->ErrorInfo;
        }
    }
    




    function xacnhanmk($email,$maxacnhan){
        require "PHPMailer-master/src/PHPMailer.php"; 
        require "PHPMailer-master/src/SMTP.php"; 
        require 'PHPMailer-master/src/Exception.php'; 
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = '20004154@st.vlute.edu.vn'; // SMTP username
            $mail->Password = 'rybzwwilembcrkax';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('20004154@st.vlute.edu.vn', 'Shop shoes' ); 
            $mail->addAddress($email); 
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Thư gửi lại mật khẩu';
            $noidungthu = '<p style="font-size:20px;">Mật xác nhận là: <span style="font-weight:600;">'.$maxacnhan.'</span></p>'; 
            $mail->Body = $noidungthu;
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            echo 'Đã gửi mail xong';
        } catch (Exception $e) {
            echo 'Error: ', $mail->ErrorInfo;
        }
    }



?>
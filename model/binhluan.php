<?php

    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan') ";
        pdo_execute($sql);
    }

    function loadall_binhluan($idpro){
        $sql="select * from binhluan where 1 ";
        if($idpro>0) $sql.=" AND idpro='".$idpro."'" ;

        $sql.=" order by id desc";

        $listbinhluan = pdo_query($sql);
        return $listbinhluan; 
    }

    function load_ten_user($id){
        if($id>0){
            $sql="select * from taikhoan where id=".$id;
            $user=pdo_query_one($sql);
            extract($user);
            return $user;
        }else{
            return "";
        }
    }

    function loadone_tenuser_binhluan($iduser){
        $sql="select taikhoan.user as user from taikhoan where id=".$iduser;
        $tk_binhluan=pdo_query_one($sql);
        return  $tk_binhluan;
    }
    
    function delete_userbinhluan($iduser){
        $sql="delete from binhluan where iduser=".$iduser;
        pdo_execute($sql);
    }

?>
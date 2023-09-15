<?php
    function insert_sanpham($tensp,$iddm,$giasp,$hinh,$mota,$soluong){
        $sql="insert into sanpham(name,iddm,price,img,mota,soluong) values('$tensp','$iddm','$giasp','$hinh','$mota','$soluong') ";
        pdo_execute($sql);
    }

    // function delete_sanpham($id){
    //     $sql="delete from sanpham where id=".$id;
    //     pdo_execute($sql);
    // }

    function loadall_sanpham_top10(){
        $sql="select * from sanpham where 1 order by id desc limit 0,8";
        $listsanpham = pdo_query($sql);
        return $listsanpham; 
    }

    function loadall_sanpham_home(){
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,12";
        $listsanpham = pdo_query($sql);
        return $listsanpham; 
    }


    // function loadall_sanpham_soluong($iddm){
    //     $sql="select count(id) as countsp from sanpham where id=".$iddm;
    //     $listslsanpham = pdo_query($sql);
    //     return $listslsanpham; 
    // }


    function loadall_sanpham($kyw="",$iddm=0){
        $sql="select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham; 
    }


    //load sp phu kien

    function loadall_sanpham_phukien($kyw="",$iddm){
        $sql="select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm =27";
        }
        $sql.=" order by id desc";
        $listsanpham_phukien = pdo_query($sql);
        return $listsanpham_phukien; 
    }
    //

    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="select * from danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
    }


    
    // function load_ten_dm($iddm){
    //     if($iddm>0){

    //     }
    //     $sql="select * from danhmuc where id=".$iddm;
    //     $dm=pdo_query_one($sql);
    //     extract($dm);
    //     return $name;
    // }

    function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function loadone_sanpham_mua($id){
        $sql="select sanpham.soluong as soluong from sanpham where id=".$id;
        $sp_mua=pdo_query_one($sql);
        return $sp_mua;
    }

    function loadone_sp_luotxem($id){
        $sql="select sanpham.luotxem as luotxem from sanpham where id=".$id;
        $sp_luotxem=pdo_query_one($sql);
        return $sp_luotxem;
    }


    function load_sanpham_cungloai($id,$iddm){
        $sql="select * from sanpham where iddm=".$iddm." AND id <> ".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham; 
    }



    function update_sanpham($id,$name,$iddm,$price,$mota,$img){
        if($img!=""){
            $sql="update sanpham set iddm='".$iddm."',name='".$name."', price='".$price."',mota='".$mota."',img='".$img."' where id=".$id;
        }else{
            $sql="update sanpham set iddm='".$iddm."',name='".$name."',price='".$price."',mota='".$mota."' where id=".$id;
            
        }
        pdo_execute($sql);
    }

    function update_sanpham_sl($id,$soluong){
            $sql="update sanpham set soluong='".$soluong."' where id=".$id;
            pdo_execute($sql);
    }

    function update_sanpham_luotxem($id,$luotxem){
        $sql="update sanpham set luotxem='".$luotxem."' where id=".$id;
        pdo_execute($sql);
    }


        // function load_sanpham_cungloai_dm($id,$iddm){
        //     $sql="select * from sanpham where iddm=".$iddm." AND id <> ".$id;
        //     $listsanpham = pdo_query($sql);
        //     return $listsanpham; 
        // }

        // function loadone_sanpham_update($id){
        //     $sql="select sanpham.name as namesp from sanpham where id=".$id;
        //     $sp=pdo_query_one($sql);
        //     return $sp;
        // }

    
    

?>
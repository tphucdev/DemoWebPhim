<?php
    function insert_danhmuc($tenloai){
        $sql="insert into danhmuc(name) values('$tenloai') ";
        pdo_execute($sql);
    }

    // function delete_danhmuc($id){
    //     $sql="delete from danhmuc where id=".$id;
    //     pdo_execute($sql);
    // }

    function loadall(){
        $sql="select * from danhmuc order by id desc ";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc; 
    }

  

    // function loadone($id){
    //     $sql = "select * from danhmuc where id=".$id;
    //     $dm = pdo_query_one($sql);
    //     return $dm;
    // }

    function delete_danhmuc($id){
        $sql="delete from danhmuc where id=".$id;
        pdo_execute($sql);
    }

    function load_sanpham_cungloai_dm_name($id,$iddm){
        $sql="select sanpham.name as namesp from sanpham where iddm=".$iddm." AND id <> ".$id;
        $listsanpham_name = pdo_query($sql);
        return $listsanpham_name; 
    }

?>
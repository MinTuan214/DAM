<?php
    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO danhmuc(name) VALUES ('$tenloai')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = "delete from danhmuc where id = ".$id;
        pdo_execute($sql);
    }

    function loadAll_danhmuc(){
        $sql = "select * from danhmuc order by id desc";
        $listloaihang = pdo_query($sql);
        return $listloaihang;
    }

    function loadone_danhmuc($id){
        $sql = "select * from danhmuc where id = ".$id;
        $lh= pdo_query_one($sql);
        return $lh;
    }

    function update_danhmuc($id, $tenloai){
        $sql = "update danhmuc set name='" .$tenloai. "' where id= ".$id;
        pdo_execute($sql);
    }
?>  
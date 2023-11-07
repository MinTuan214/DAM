<?php
     function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan){
        $sql = "INSERT INTO binhluan(noidung, iduser, idpro, ngaybinhluan) VALUES ('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadAll_binhluan($idpro) {
        $sql = "SELECT binhluan.*, taikhoan.user AS username FROM binhluan
                LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
                WHERE 1";
        if ($idpro > 0) $sql .= " AND binhluan.idpro = '$idpro'";
        $sql .= " ORDER BY binhluan.id DESC";
    
        $listbinhluan = pdo_query($sql);
        return $listbinhluan;
    }
    
    function delete_binhluan($id){
        $sql = "delete from binhluan where id = ".$_GET['id'];
        pdo_execute($sql);
    }
?>
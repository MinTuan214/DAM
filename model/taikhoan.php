<?php
    function loadAll_taikhoan(){
        $sql = "select * from taikhoan order by id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function loadone_taikhoan($id) {
        $sql = "select * from taikhoan where id = ".$id;
        $taikhoan =  pdo_query_one($sql);
        return $taikhoan;
    }
    function insert_taikhoan($email, $user, $pass){
        $sql = "INSERT INTO taikhoan(email,user,pass) VALUES ('$email','$user','$pass')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql = "select * from taikhoan where user = '".$user."'AND pass = '".$pass."' ";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id, $user, $pass, $email, $address, $tel, $role){
        $sql = "update taikhoan SET user='".$user."',pass='".$pass."',email='".$email."',address ='".$address."',tel='".$tel."',role='".$role."' where id = ".$id;
        pdo_execute($sql);
    }
    function checkemail($email){
        $sql = "select * from taikhoan where email = '".$email."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
?>
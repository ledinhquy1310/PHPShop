<?php
class user
{
    // phương thức kiểm tra user và email có tồn tại hay không
    function checkUser($user, $email)
    {
        $db = new connect();
        $select = "SELECT a.username, a.email FROM khachhang a 
            WHERE a.username='$user' OR a.email='$email'";
        $result = $db->getList($select);
        return $result;
    }

    // thực hiện insert vào database
    function insertKhachHang($tenkh, $username, $matkhau, $email, $diachi, $sodt)
    {
        $db = new connect();
        $query = "INSERT INTO khachhang (makh, tenkh, username, matkhau, email, diachi, sodienthoai) 
            VALUES (NULL, '$tenkh', '$username', '$matkhau', '$email', '$diachi', '$sodt')";
        $result = $db->exec($query);
        return $result;
    }
    function logKhachHang($user, $pass)
    {
        $db = new connect();
        $select = "select a.makh,a.tenkh,a.username from khachhang a WHERE a.username='$user' and a.matkhau='$pass'";
        $result = $db->getInstance($select);
        return $result;
    }
    function checkEmail($email)
    {
        $db = new connect();
        $select = "select * from khachhang a where a.email='$email'";
        $result = $db->getList($select);
        return $result;
    }

    function updateEmail($email, $pass)
    {
        $db = new connect();
        $query = "update khachhang set matkhau ='$pass' where email='$email' ";
        $db->exec($query);
    }
}

?>
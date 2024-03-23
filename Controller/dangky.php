<?php
require_once './Model/connect.php';
$act = "dangky";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

}
switch ($act) {
    case 'dangky':
        include_once "./View/registration.php";
        break;
    // Controller > dangky.php

    case 'dangky_action':
        // Chuyển toàn bộ thông tin về dangky_action và nhận thông tin
        $tenkh = '';
        $diachi = '';
        $sodt = '';
        $user = '';
        $email = '';
        $pass = '';

        if (isset($_POST['submit'])) {
            $tenkh = $_POST['txttenkh'];  // Tình
            $diachi = $_POST['txtdiachi'];  // HCM
            $sodt = $_POST['txtsodt'];  // 123456
            $user = $_POST['txtusername'];  // Tinhtinh
            $email = $_POST['txtemail'];  // tinh@itc.edu.vn
            $pass = $_POST['txtpass'];  // 123
            $salfF = "G435#";
            $salfL = "T34a!&";
            $passnew = md5($salfF . $pass . $salfL);  // G435#123T34a!&
        }
        // 
        $kh = new user();
        $check = $kh->checkUser($user, $email)->rowCount();

        if ($check >= 1) {
            echo '<script> alert("username hoặc email đã tồn tại");</script>';
            // include_once "./View/registration.php";
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=dangky"/>';
        } else {
            // insert vào database
            $inskh = $kh->insertKhachHang($tenkh, $user, $passnew, $email, $diachi, $sodt);

            if ($inskh !== false) {
                echo '<script> alert("Đăng ký thành công");</script>';
                include_once "./View/login.php";
            } else {
                echo '<script> alert("Đăng ký không thành công");</script>';
                // include_once "./View/registration.php";
                echo '<meta http-equiv="refresh" content="0;url=../index.php?action=dangky"/>';
            }
        }
        break;

}
?>
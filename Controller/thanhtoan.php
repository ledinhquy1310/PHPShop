<?php
if (isset ($_SESSION['makh'])) {
    $makh = $_SESSION['makh'];
    $hd = new hoadon();

    $sohd = $hd->insertHoaDon($makh);
    $_SESSION['masohd'] = $sohd;
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $item) {
        $hd->insertCTHoaDon($sohd, $item['mahh'], $item['soluong'], $item['mausac'], $item['thanhtien']);
        $total += $item['thanhtien'];
    }

    $hd->updateTongTien($sohd, $makh, $total);
}
unset($_SESSION['cart']);
include_once "./View/order.php";
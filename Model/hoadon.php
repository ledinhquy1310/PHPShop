<?php
class hoadon
{
    function insertHoaDon($makh)
    {
        $db = new connect();
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $query = "INSERT INTO hoadon(masohd,makh, ngaydat, tongtien) VALUES(NUll,$makh, '$ngay', 0)";
        $db->exec($query);
        $select = "SELECT a.masohd from hoadon a order by a.masohd desc limit 1";
        $masohd = $db->getInstance($select);
        return $masohd[0];

    }


    function insertCTHoaDon($masohd, $mahh, $soluongmua, $mausac, $thanhtien)
    {
        $db = new connect();
        $query = "INSERT into cthoadon(masohd, mahh, soluongmua, mausac, thanhtien,tinhtrang) 
        VALUES($masohd, $mahh, $soluongmua,'$mausac', $thanhtien,0)";
        $db->exec($query);
    }

    function updateTongTien($masohd, $makh, $tongtien)
    {
        $db = new connect();
        $query = "UPDATE hoadon set tongtien=$tongtien WHERE masohd=$masohd and makh=$makh";
        $db->exec($query);
    }

    function selectTTKH($masohd)
    {
        $db = new connect();
        $select = "SELECT a.masohd, b.tenkh, b.diachi, b.sodienthoai, a.ngaydat
        FROM hoadon a, khachhang b
        WHERE a.makh = b.makh AND a.masohd = $masohd";

        $result = $db->getInstance($select);
        return $result;
    }

    function selectTTHD($masohd)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.tenhh, c.mausac, b.dongia, c.soluongmua FROM hanghoa a, cthanghoa b, cthoadon c 
        WHERE a.mahh = b.idhanghoa AND a.mahh = c.mahh AND c.masohd = $masohd";
        $result = $db->getList($select);
        return $result;
    }
}

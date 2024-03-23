<?php
class hanghoa
{
    function getHangHoaNew()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac
         from hanghoa a,cthanghoa b, mausac c 
         WHERE a.mahh=b.idhanghoa AND b.idmau=c.Idmau ORDER by a.mahh DESC limit 8';
        $result = $db->getlist($select);
        return $result;
    }
    function getHangHoaSale()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac, b.giamgia 
        from hanghoa a,cthanghoa b, mausac c WHERE a.mahh=b.idhanghoa AND b.idmau=c.Idmau
         and giamgia!=0 ORDER by a.mahh DESC limit 4';
        $result = $db->getlist($select);
        return $result;
    }
    function getHangHoaAll()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac
        from hanghoa a,cthanghoa b, mausac c 
        WHERE a.mahh=b.idhanghoa AND b.idmau=c.Idmau ORDER by a.mahh DESC';
        $result = $db->getlist($select);
        return $result;
    }
    function getHangHoaAllSale()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac, b.giamgia 
        from hanghoa a,cthanghoa b, mausac c
         WHERE a.mahh=b.idhanghoa AND b.idmau=c.Idmau
         and giamgia!=0 ORDER by a.mahh DESC';
        $result = $db->getlist($select);
        return $result;
    }
    function getHangHoaAllPage($start, $limit)
    {
        $db = new connect();
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac, b.giamgia 
        from hanghoa a,cthanghoa b, mausac c
         WHERE a.mahh=b.idhanghoa AND b.idmau=c.Idmau
         ORDER by a.mahh DESC limit " . $start . "," . $limit;
        $result = $db->getlist($select);
        return $result;
    }
    function getHangHoaId($id)
    {
        $db = new connect();
        $select = "select DISTINCT a.mahh,a.tenhh,a.mota,b.hinh,b.dongia,b.giamgia
        from hanghoa a,cthanghoa b
         WHERE a.mahh=b.idhanghoa AND a.mahh=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    function getHangHoaMau($id)
    {
        $db = new connect();
        $select = "select DISTINCT b.Idmau,b.mausac from cthanghoa a,mausac b
        WHERE a.idmau=b.Idmau AND a.idhanghoa=$id";
        $result = $db->getlist($select);
        return $result;
    }

    function getHangHoaHinh($id)
    {
        $db = new connect();
        $select = "select DISTINCT a.hinh from cthanghoa a
        WHERE a.idhanghoa=$id";
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaMauIdMau($idmau)
    {
        $db = new connect();
        $select = "SELECT mausac FROM mausac WHERE Idmau = $idmau";
        $result = $db->getInstance($select);
        return $result;
    }

    function getHangHoaHinhMau($id, $mau)
    {
        $db = new connect();

        $select = "SELECT a.hinh FROM cthanghoa a JOIN mausac b ON a.idmau = b.Idmau
        WHERE a.idhanghoa = $id AND b.Idmau = $mau GROUP BY a.idhanghoa";
        $result = $db->getInstance($select);
        return $result;
    }


    function getHangHoaByLoai($maloai)
    {
        $db = new connect();
        $select = "Select a.mahh, a.tenhh, a.soluotxem, b.hinh, b.dongia, c.mausac, b.giamgia 
        from hanghoa a, cthanghoa b, mausac c
        WHERE a.mahh = b.idhanghoa AND b.idmau = c.Idmau AND a.maloai = $maloai ORDER by a.mahh DESC";
        $result = $db->getlist($select);
        return $result;
    }

    function getSoLuongTon($mahh)
    {
        $db = new connect();
        $select = "SELECT a.soLuongTon FROM cthanghoa a INNER JOIN hanghoa b ON b.mahh = a.idhanghoa WHERE b.mahh = $mahh";
        $result = $db->getInstance($select);
        return $result[0];
    }


    function timkiemSP($timkiem)
    {
        $db = new connect();
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,c.mausac from hanghoa a,cthanghoa b,mausac c 
        WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and b.giamgia=0 and tenhh like '%$timkiem%' ORDER by a.mahh  DESC";
        $result = $db->getlist($select);
        return $result;
    }

}
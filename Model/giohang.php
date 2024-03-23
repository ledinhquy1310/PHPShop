<?php
class giohang
{
    function addHangHoa($mahh, $mausac, $soluong)
    {
        $sanpham = new hanghoa();
        $sp = $sanpham->getHangHoaId($mahh);
        $tenhh = $sp['tenhh'];
        $dongia = $sp['dongia'];
        $giamgia = $sp['giamgia'];
        $total = ($giamgia > 0) ? $soluong * $giamgia : $soluong * $dongia;
        $mau = $sanpham->getHangHoaMauIdMau($mausac);
        $tenmau = $mau['mausac'];
        $hinh = $sanpham->getHangHoaHinhMau($mahh, $mausac);
        $img = $hinh['hinh'];
        $soluongton = $sanpham->getSoLuongTon($mahh);

        // Kiểm tra nếu số lượng đặt mua vượt quá số lượng tồn
        if ($soluong <= $soluongton) {
            $flag = false;
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['mahh'] == $mahh && $item['mausac'] == $tenmau) {
                    $flag = true;
                    $new_quantity = $_SESSION['cart'][$key]['soluong'] + $soluong;
                    // Kiểm tra nếu tổng số lượng mới vẫn không vượt quá số lượng tồn
                    if ($new_quantity <= $soluongton) {
                        $_SESSION['cart'][$key]['soluong'] = $new_quantity;
                        $this->updateHH($key, $new_quantity);
                    } else {
                        // Nếu vượt quá số lượng tồn, chỉ cập nhật số lượng tối đa là số lượng tồn
                        $_SESSION['cart'][$key]['soluong'] = $soluongton;
                        $this->updateHH($key, $soluongton);
                    }
                    break;
                }
            }

            if ($flag == false) {
                $item = array(
                    'mahh' => $mahh,
                    'tenhh' => $tenhh,
                    'hinh' => $img,
                    'dongia' => $dongia,
                    'giamgia' => $giamgia,
                    'mausac' => $tenmau,
                    'soluong' => min($soluong, $soluongton), // Số lượng không vượt quá số lượng tồn
                    'thanhtien' => $total,
                    'soluongton' => $soluongton,
                );
                $_SESSION['cart'][] = $item;
            }
        } else {
            // Hiển thị thông báo khi số lượng vượt quá số lượng tồn
            echo '<script>alert("Số lượng vượt quá số lượng tồn");</script>';
            // Chuyển hướng người dùng về trang chủ
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
        }

    }


    function updateHH($index, $soluong)
    {
        if ($soluong <= 0) {
            unset($_SESSION['cart'][$index]);
        } else {
            $_SESSION['cart'][$index]['soluong'] = $soluong;

            // Tính giảm giá
            if (isset ($_SESSION['cart'][$index]['giamgia']) && $_SESSION['cart'][$index]['giamgia'] > 0) {
                $tiennew = $_SESSION['cart'][$index]['soluong'] * $_SESSION['cart'][$index]['giamgia'];
                $_SESSION['cart'][$index]['thanhtien'] = $tiennew;
            } else {
                $tiennew = $_SESSION['cart'][$index]['soluong'] * $_SESSION['cart'][$index]['dongia'];
                $_SESSION['cart'][$index]['thanhtien'] = $tiennew;
            }
        }
    }

    function getSubTotal()
    {
        $subtotal = 0;
        if (isset ($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                if (isset ($item['thanhtien'])) {
                    $subtotal += $item['thanhtien'];
                }
            }
        }

        $subtotal = number_format($subtotal, 0);
        return $subtotal;
    }
    function getSoLuongMua($mahh)
    {
        $db = new connect();
        $select = "SELECT sum(soluongmua) from cthoadon WHERE mahh=$mahh";
        $result = $db->getInstance($select);
        return $result[0];
    }
}
?>
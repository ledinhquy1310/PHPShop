<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$act = "giohang";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'giohang':
        include_once "./View/cart.php";
        break;

    case 'giohang_action':
        $mahh = isset($_POST['mahh']) ? $_POST['mahh'] : 0;
        $mausac = isset($_POST['mymausac']) ? $_POST['mymausac'] : 0;
        $soluong = isset($_POST['soluong']) ? $_POST['soluong'] : 0;

        $gh = new giohang();
        $gh->addHangHoa($mahh, $mausac, $soluong);
        echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang&act=giohang" />';
        break;
    case 'delete_cart':
        if (isset($_GET['id'])) {
            $vt = $_GET['id'];
            unset($_SESSION['cart'][$vt]);
            echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang" />';
        }
        break;
    case 'update_cart':
        if (isset($_POST['newqty'])) {
            $newqty = $_POST['newqty'];
            foreach ($newqty as $key => $value) {
                if ($_SESSION['cart'][$key]['soluong'] != $value) {
                    $gh = new giohang();
                    $gh->updateHH($key, $value);
                }
            }
        }
        echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang" />';
        break;

}
?>
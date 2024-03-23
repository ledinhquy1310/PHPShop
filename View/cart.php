<div class="table-responsive">
    <?php
    function getSubTotal()
    {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['thanhtien'];
        }
        $subtotal = number_format($subtotal, 0);
        return $subtotal;
    }
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

        ?>
    <form action="index.php?action=giohang&&act=update_cart" method="post">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td colspan="5">
                        <h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2>
                    </td>
                </tr>
                <tr class="table-success">
                    <th>Số TT</th>
                    <th>Thông Tin Sản Phẩm</th>
                    <th>Tùy Chọn Của Bạn</th>
                    <th colspan="2">Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $j = 0;
                    foreach ($_SESSION['cart'] as $key => $item) {
                        $soluongton = $item['soluongton'];
                        $j++;
                        ?>
                <tr>
                    <td>
                        <?php echo $j; ?>
                    </td>
                    <td><img width="50px" height="50px" src="Content/img/<?php echo $item['hinh'] ?>">
                        <?php echo $item['tenhh'] ?>
                    </td>
                    <td>Màu:
                        <?php echo $item['mausac'] ?>
                    </td>
                    <td>Đơn Giá:
                        <?php
                                if (isset($item['giamgia']) && $item['giamgia'] > 0) {
                                    echo number_format($item['giamgia']) . '<br>';
                                } else {
                                    echo number_format($item['dongia']) . '<br>';
                                }
                                ?>
                        Số Lượng:
                        <input class="form-control" type="number" name="newqty[]" min="1"
                            max="<?php echo $soluongton ?>"
                            value="<?php echo min($item['soluong'], $item['soluongton']); ?>" />
                        <br />
                        <p style="float: right;"> Thành Tiền
                            <?php
                                    echo number_format($item['thanhtien']) . ' <sup><u>đ</u></sup>';
                                    ?>
                        </p>
                    </td>
                    <td style="text-align: center;" class="pt-5">
                        <a href="index.php?action=giohang&&act=delete_cart&id=<?php echo $key ?>">
                            <button type="button" class="btn">Xóa</button>
                        </a>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="3">
                        <b>Tổng Tiền</b>
                    </td>
                    <td style="float: right;">
                        <b>
                            <?php echo (getSubTotal()); ?> <sup><u>đ</u></sup>
                        </b>
                    </td>
                    <td><a href="index.php?action=thanhtoan">Thanh toán</a></td>
                </tr>
                <tr>
                    <td colspan="5" style="text-align: right; padding-right:50px">
                        <a href=""><button type="submit" class="btn edit">Sửa</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php
    } else {
        echo '<script> alert("Chưa có hàng");</script>';
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
    }
    ?>
</div>
</div>
<style>
.btn {
    background-color: red;
    color: white;
    padding: 10px;
    font-size: larger;
    border-radius: 15px;
    width: 53px;
    height: 48px;
}

.edit {
    background-color: blue;

}

.form-control {
    width: 50px;
    font-size: 15px;
}
</style>
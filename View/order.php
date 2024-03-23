<div class="table-responsive">
    <?php
  if (!isset ($_SESSION['makh'])):
    echo '<script> alert("Bạn phải đăng nhập");</script>';
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
  else:
    ?>
    <form action="" method="post">
        <table class="table table-bordered" border="0">
            <?php
        if (isset ($_SESSION['masohd'])) {
          $masohd = $_SESSION['masohd'];
          $hd = new hoadon();
          $kh = $hd->selectTTKH($masohd);
          $tenkh = $kh['tenkh'];
          $ngay = $kh['ngaydat'];
          $dc = $kh['diachi'];
          $sodt = $kh['sodienthoai'];

          ?>
            <tr>
                <td colspan="4">
                    <h2 style="color: red;">HÓA ĐƠN</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">Số Hóa đơn:
                    <?php echo $masohd ?>
                </td>
                <td colspan="2">Ngày lập:
                    <?php echo $ngay ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">Họ và tên:</td>
                <td colspan="2">
                    <?php echo $tenkh ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">Địa chỉ: </td>
                <td colspan="2">
                    <?php echo $dc ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">Số điện thoại: </td>
                <td colspan="2">
                    <?php echo $sodt ?>
                </td>
            </tr>
        </table>
        <!-- Thông tin sản phẩm -->
        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>Số TT</th>
                    <th>Thông Tin Sản Phẩm</th>
                    <th>Tùy Chọn Của Bạn</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $j = 0;
            $dongia = '';
            $soluong = '';
            $sp = $hd->selectTTHD($masohd);
            while ($set = $sp->fetch()) {
              $j++;
              ?>
                <tr>
                    <td>
                        <?php echo $j ?>
                    </td>
                    <td>
                        <?php echo $set['tenhh'] ?>
                    </td>
                    <td>Màu:
                        <?php echo $set['mausac'] ?>
                    </td>
                    <td>Đơn Giá:
                        <?php
                  $dongia = number_format($set['dongia']);
                  echo $dongia;
                  ?>
                        - Số Lượng:
                        <?php
                  $soluong = $set['soluongmua'];
                  echo $soluong;
                  ?>
                        <br />
                    </td>
                </tr>
                <?php }

            ?>
                <tr>
                    <td colspan="3">
                        <b>Tổng Tiền</b>
                    </td>
                    <td style="float: right;">
                        <b>
                            <?php
                  echo getSubTotal();
                  ?>
                            <sup><u>đ</u></sup>
                        </b>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php
        } else {
          echo '"masohd" is not set.';
        }
  endif;
  ?>
    <?php
  function getSubTotal()
  {
    $total = 0;

    if (isset ($_SESSION['masohd'])) {
      $masohd = $_SESSION['masohd'];
      $hd = new hoadon();
      $sp = $hd->selectTTHD($masohd);

      while ($set = $sp->fetch()) {
        $dongia = $set['dongia'];
        $soluong = $set['soluongmua'];
        $subtotal_per_item = $dongia * $soluong;
        $total += $subtotal_per_item;
      }
    }

    return number_format($total, 0);
  }

  ?>
</div>
</div>
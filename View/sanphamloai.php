<style>
    .items {
        border: 1px solid #c89979;
        border-radius: 15px;
        position: relative;
        transition: box-shadow 0.5s ease;
    }

    .items:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transform: scale(1.02);

    }

    .card-body {
        padding: 0;
    }

    .card-footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
    }

    button.add {
        width: max-content;
        padding: 5px 10px 5px 10px;
        height: 30px;
        font-size: 15px;
        border: none;
        background-color: #c89979;
        border-radius: 5px;
        color: #fff;
        display: block;
        margin: 0 auto;
        text-align: center;
        bottom: 15px;
        transition: .3s;
    }

    button.add:hover {
        font-size: 17px;
    }

    .img-fluid {
        border-radius: 15px 15px 0 0;
    }

    span {
        color: #c89979;
    }
</style>
<div>
    <h3 class="mb-3 font-weight-bold mt-5" style="color:#c89979; margin-left:500px">TẤT CẢ SẢN PHẨM</h3>;
</div>
<div class="row">
    <?php
    if (isset($_GET['maloai'])) {
        $maloai = $_GET['maloai'];
        $hh = new hanghoa();
        $products = $hh->getHangHoaByLoai($maloai);
        if ($products) {
            foreach ($products as $product) {
                ?>
                <div class="col-lg-3 col-md-4 mb-3 mt-5 text-left ">
                    <div class="items">
                        <div class="card-body view overlay z-depth-1-half">
                            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $product['mahh'] ?>">
                                <img src="Content/img/<?php echo $product['hinh'] ?>" class="img-fluid" alt="" style="width: 500px">
                                <div class="mask rgba-white-slight"></div>
                        </div>
                        <div class="card-footer" style="height:140px">
                            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $product['mahh'] ?>">
                                <span>
                                    <?php echo $product['tenhh'] ?>
                                </span></br>
                            </a>
                            <h5 class="my-4 font-weight-bold" style="color: red;">
                                <?php echo number_format($product['dongia']) ?><sup><u>đ</u></sup></br>
                            </h5>
                            <button class="add"><a style="color:#fff"
                                    href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $product['mahh'] ?>">Chi
                                    Tiết
                                    Sản Phẩm</a>
                            </button>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            ?>
            <p>Loại sản phẩm này hiện không còn!</p>
            <?php
        }
    } else {
        ?>
        <p>Vui Lòng Chọn Loại Sản Phẩm</p>
        <?php
    }
    ?>
</div>
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
<div class="mt-5 ads">
    <?php
    include "./View/quangcao.php";
    ?>
</div>
<!--Section: Examples-->
<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold mt-5" style="color: #c89979;">SẢN PHẨM MỚI</h3>
        </div>
        <a href="index.php?action=sanpham">
            <span style="color: gray;">Xem chi tiết</span>
        </a>
    </div>
    <!--Grid row-->
    <div class="row">
        <?php
        $hh = new hanghoa();
        $result = $hh->getHangHoaNew();
        while ($set = $result->fetch()):
            ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 mt-5 text-left ">
                <div class="items">
                    <div class="card-body view overlay z-depth-1-half">
                        <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                            <img src="Content/img/<?php echo $set['hinh'] ?>" class="img-fluid" alt="" style="width: 500px">
                            <div class="mask rgba-white-slight"></div>
                    </div>
                    <div class="card-footer" style="height:140px">
                        <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                            <span>
                                <?php echo $set['tenhh'] ?>
                            </span></br>
                        </a>
                        <h5 class="my-4 font-weight-bold" style="color: red;">
                            <?php echo number_format($set['dongia']) ?><sup><u>đ</u></sup></br>
                        </h5>
                        <button class="add" name="add_to_cart"><a style="color:#fff"
                                href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">Chi
                                Tiết
                                Sản Phẩm</a>
                        </button>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
        ?>
    </div>

    <hr>

</section>
<!-- end sản phẩm mới nhất -->
<!-- sản phẩm khuyến mãi -->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold mt-5" style="color: #c89979;">SẢN PHẨM KHUYẾN MÃI</h3>
        </div>
        <a href="index.php?action=sanpham&act=sanphamkhuyenmai">
            <span style="color: gray;">Xem chi tiết</span>
        </a>
    </div>
    <!--Grid row-->
    <div class="row">

        <?php
        $hh = new hanghoa();
        $result = $hh->getHangHoaSale();
        while ($set = $result->fetch()):
            ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left">
                <div class="items">
                    <div class="card-body view overlay z-depth-1-half">
                        <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                            <img src="Content/img/<?php echo $set['hinh'] ?>" class="img-fluid" alt="" style="width: 500px">
                            <div class="mask rgba-white-slight"></div>
                    </div>
                    <div class="card-footer" style="height:140px">
                        <a href="">
                            <span>
                                <?php echo $set['tenhh'] ?>
                            </span></br>
                        </a>
                        <h5 class="my-4 font-weight-bold">
                            <font color="red">
                                <?php echo number_format($set['giamgia']) ?><sup><u>đ</u></sup>
                            </font>
                            <strike>
                                <?php echo number_format($set['dongia']) ?>;
                            </strike><sup><u>đ</u></sup>
                        </h5>
                        <button class="add" name="add_to_cart"><a style="color:#fff"
                                href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">Chi
                                Tiết
                                Sản Phẩm</a>
                        </button>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
        ?>
    </div>

    <!--Grid row-->

</section>
<!-- end sản phẩm khuyến mãi -->
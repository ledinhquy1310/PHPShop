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

    .search-results {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .pagination {
        margin-left: 200px;
    }
</style>

<?php
$hh = new hanghoa();
$count = $hh->getHangHoaAll()->rowCount();
$limit = 8;
$trang = new page();
$pages = $trang->findPage($count, $limit);
$start = $trang->findStart($limit);
?>

<!-- sản phẩm-->
<?php
$ac = 1;
if (isset($_GET['action'])) {
    if (isset($_GET['act']) && $_GET['act'] == 'sanphamkhuyenmai') {
        $ac = 2;
    } else if (isset($_GET['act']) && $_GET['act'] == 'timkiem') {
        $ac = 3;
    } else {
        $ac = 1;
    }
}
?>

<!--Section: Examples-->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row search-results">
        <div class="col-lg-8">
            <?php
            if ($ac == 1) {
                echo ' <h3 class="mb-5 font-weight-bold mt-5" style="color:#c89979; margin-left:10px">TẤT CẢ SẢN PHẨM</h3>';
            }
            if ($ac == 2) {
                echo ' <h3 class="mb-5 font-weight-bold mt-5" style="color:#c89979;">TẤT CẢ SẢN PHẨM SALE</h3>';
            }
            if ($ac == 3) {
                echo ' <h3 class="mb-5 font-weight-bold mt-5" style="color:#c89979;">SẢN PHẨM TÌM KIẾM</h3>';
            }

            ?>
        </div>

    </div>
    <!--Grid row-->
    <div class="row">
        <div class="col-lg-12 text-center">
            <!-- <h3 class="mb-5 font-weight-bold mt-5" style="color: red;">PRODUCT</h3> -->
        </div>
    </div>
    <!--Grid row-->
    <div class="row">
        <?php
        $showPagination = true;
        $hh = new hanghoa();
        if ($ac == 1) {
            $result = $hh->getHangHoaAllPage($start, $limit);
        }
        if ($ac == 2) {
            $result = $hh->getHangHoaAllSale();
            $showPagination = false;
        }
        if ($ac == 3) {
            if (isset($_POST['txtsearch'])) {
                $tk = $_POST['txtsearch'];
                $result = $hh->timkiemSP($tk);
            }
            $showPagination = false;
        }
        while ($set = $result->fetch()):
            ?>

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 mt-5 text-left ">
                <div class="items">
                    <div class="card-body view overlay z-depth-1-half">
                        <img src="Content/img/<?php echo $set['hinh'] ?>" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>
                    <div class="card-footer" style="height:140px">
                        <a href="">
                            <span>
                                <?php echo $set['tenhh'] ?>
                            </span></br>
                        </a>
                        <?php
                        if ($ac == 1 || $ac == 3) {
                            echo '<h5 class="my-4 font-weight-bold" style="color: red;">';
                            echo number_format($set['dongia']);
                            echo '<sup><u>đ</u></sup></br></h5>';
                        }
                        if ($ac == 2) {
                            echo ' <h5 class="my-4 font-weight-bold">
                            <font color="red">';

                            echo number_format($set['giamgia']);
                            echo '<sup><u>đ</u></sup>
                            </font>
                            <strike>';
                            echo number_format($set['dongia']);
                            echo '</strike><sup><u>đ</u></sup>
                        </h5>';
                        }
                        ?>

                        <button class="add" name="add_to_cart"><a style="color:#fff"
                                href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">Chi Tiết
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


<!-- end sản phẩm mới nhất -->

<?php if ($showPagination): ?>
    <div class="col-md-6 div col-md-offset-3">
        <ul class="pagination">
            <?php
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            if ($current_page > 1 && $pages > 1) {
                echo '<li><a href="index.php?action=sanpham&page' . ($current_page - 1) . '">Prev</a></li>';
            }
            for ($i = 1; $i <= $pages; $i++) {
                ?>
                <li><a href="index.php?action=sanpham&page=<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </a></li>
                <?php
            }
            if ($current_page < $pages && $pages > 1) {
                echo '<li><a href="index.php?action=sanpham&page=' . ($current_page + 1) . '">Next</a></li>';
            }
            ?>
        </ul>
    </div>
<?php endif; ?>
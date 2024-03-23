<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>
    </div>
    <article class="col-12">
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang&act=giohang_action" method="post">
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $hh = new hanghoa();
                        $sp = $hh->getHangHoaId($id);
                        $soluongton = $hh->getSoLuongTon($id);
                        $tenhh = $sp['tenhh'];
                        $mota = $sp['mota'];
                        $dongia = $sp['dongia'];
                        $giamgia = $sp['giamgia'];
                    }
                    ?>
                    <div class="preview col-md-6">
                        <div class="tab-content">
                            <?php
                            $hinh = $hh->getHangHoaHinh($id);
                            $set = $hinh->fetch();
                            ?>
                            <div class="tab-pane active" id="">
                                <img src="Content/img/<?php echo $set['hinh'] ?>" alt="" width="200px" height="350px">
                            </div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <?php
                            while ($img = $hinh->fetch()):
                                ?>
                            <li class="active"><a href="#<?php echo $img['hinh']; ?>" data-toggle="tab">
                                    <img src="<?php echo 'Content/img/' . $img['hinh']; ?>" alt=""></a>
                            </li>
                            <?php
                            endwhile;
                            ?>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $id ?>" />
                        <h3 class="product-title">
                            <?php echo $tenhh ?>
                        </h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="product-description">
                            <?php echo $mota ?>
                        </p>
                        <?php if ($giamgia > 0): ?>
                        <h4 class="price" style="text-decoration: line-through;">
                            Giá gốc:
                            <?php echo number_format($dongia) ?> đ
                        </h4>
                        <h4 class="final-price price">
                            Giá sale:
                            <?php echo number_format($giamgia) ?> đ
                        </h4>
                        <?php else: ?>
                        <h4 class="price">
                            Giá bán:
                            <?php echo number_format($dongia) ?> đ
                        </h4>
                        <?php endif; ?>
                        <h5 class="colors">Màu:
                            <select name="mymausac" class="form-control" style="width:150px;">
                                <?php
                                $mau = $hh->getHangHoaMau($id);
                                while ($set = $mau->fetch()) {
                                    ?>
                                <option value="<?php echo $set['Idmau'] ?>">
                                    <?php echo $set['mausac'] ?>
                                </option>
                                <?php
                                } ?>
                            </select><br>

                            <input type="hidden" name="size" id="size" value="">
                            <?php
                            $isdisable = false;
                            $giohang = new giohang();
                            $soluongban = $giohang->getSoLuongMua($id);
                            $soluong_con_lai = $soluongton - $soluongban;
                            $isdisable = ($soluong_con_lai == 0) ? 'disabled' : '';
                            ?>
                            Số Lượng:
                            <input type="number" id="soluong" name="soluong" min="1"
                                max="<?php echo $soluong_con_lai; ?>" value="1" size="10" />
                            <br>
                            Số Lượng tồn:
                            <?php if($soluong_con_lai==0){
                                echo "Đã hết hàng !";
                            }
                            else{
                                echo $soluong_con_lai;
                            }?>
                        </h5>
                        <div class="action">
                            <button class="add-to-cart btn btn-default"
                                style="width:200px;border-radius:15px;padding-top:12px;font-size:12px" type="submit"
                                data-toggle="modal" data-target="#myModal" name="add_to_cart"
                                <?php echo $isdisable; ?>>Thêm vào giỏ hàng</button>
                            <a target="_blank"> <button class="like btn btn-default" type="button">
                                    <span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
</section>

<p class="float-left"><b>BÌnh luận </b></p>
<hr>
</div>
<form action="" method="post">
    <div class="row">

        <input type="hidden" name="txtmahh" value="" />
        <img src="Content/img/logo.png" width="75px" height="50px" ; />
        <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment"
            placeholder="Thêm bình luận">  </textarea>
        <input type="submit" class="btn" id="submitButton" style="float: right;height:50px" value="Gửi" />

    </div>

</form>
<div class="row">
    <p class="float-left"><b>Các bình luận</b></p>
    <hr>
</div>
<div class="row">
    <br />
</div>

</div>
</section>
<style>
#submitButton:hover {
    background-color: #b36800;
}
</style>
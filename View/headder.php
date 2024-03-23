<style>
    .menu {
        max-width: 960px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        justify-items: center;
    }

    #main-menu {
        display: flex;
        list-style: none;
    }

    #main-menu li {
        padding-right: 30px;
        position: relative;
    }

    .menu-child {
        color: #f8f8f8;
        display: block;
        padding: 18px 20px;
        text-decoration: none;
        font-size: 18px;
        transition: color 0.3s;
    }

    .menu-child:hover {
        color: #c89979;
    }

    ul.sub-menu {
        background-color: #353535;
        position: absolute;
        padding: 15px 0;
        list-style: none;
        width: 200px;
        display: none;
        z-index: 2;
    }

    #main-menu li:hover ul.sub-menu {
        display: block;
    }
</style>
<header class="row no-gutters ">
    <div class="container">
        <div class="navbar_menu">
            <!-- navbar -->
            <nav class="navbar ">
                <div class="container">
                    <img class=" logo navbar-brand" src="Content/img/logo.png" style="height: 86.25px;">
                    <form class="d-flex mt-2" role="search" action="index.php?action=sanpham&act=timkiem" method="post">
                        <input class="search-input" type="search" placeholder="Search" name="txtsearch"
                            aria-label="Search">
                        <button class="" type="submit">Search</button>
                    </form>
                    <nav class="nav">
                        <?php
                        if (isset($_SESSION['makh'])) {
                            ?>
                            <a class="menu-child" style="font-size: 25px;" href="index.php?action=giohang"><i
                                    class="fa-solid fa-bag-shopping"></i></a>


                            <a class="menu-child" style="padding:25px 15px 0 0"
                                href="index.php?action=dangnhap&act=dangxuat">
                                <p> Đăng xuất</p>
                            </a>
                        <?php } ?>
                        <?php
                        if (isset($_SESSION['makh'])) {
                            echo '<a class="menu-child" style="padding:25px 0 0 0;color:red">
                            <p>' . $_SESSION['tenkh'] . '</p>
                        </a>';
                        } else {
                            echo ' <a class="menu-child" style="padding:25px 15px 0 0;" href="index.php?action=dangky">
                            <p>Đăng ký</p>
                        </a>
                        <a class="menu-child" style="padding:25px 15px 0 0" href="index.php?action=dangnhap">
                            <p> Đăng nhập</p>
                        </a>';
                        }
                        ?>
                    </nav>
                </div>
            </nav>
            <!-- menu -->
            <div id="header">
                <nav class="container menu">
                    <ul id="main-menu">
                        <li><a class="menu-child" href="index.php?action=home">Trang Chủ</a></li>
                        <li><a class="menu-child" href="">Giới Thiệu</a></li>
                        <li><a class="menu-child" href="index.php?action=sanpham&act=sanpham">Danh Mục <i
                                    class="fa-solid fa-caret-down"></i></a>
                            <ul class="sub-menu">
                                <li><a class="menu-child" href="index.php?action=sanpham&act=sanphamloai&maloai=3">Đồng
                                        Hồ Sk</a>
                                </li>
                                <li><a class="menu-child" href="index.php?action=sanpham&act=sanphamloai&maloai=4">Đồng
                                        Hồ Casio</a>
                                </li>
                                <li><a class="menu-child" href="index.php?action=sanpham&act=sanphamloai&maloai=2">Đồng
                                        Hồ Olevs</a>
                                </li>
                                <li><a class="menu-child" href="index.php?action=sanpham&act=sanphamloai&maloai=1">Đồng
                                        Hồ JsDun</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-child" href="index.php?action=sanpham">Cửa Hàng</a></li>
                        <li><a class="menu-child" href="">Liên Hệ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


</header>
<!-- dang ky -->

<!DOCTYPE html>
<html>
<head>
    <title>Website xây dựng Phả hệ</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/bootstrap.min.css">
    <script  src="<?php echo base_url() ?>public/frontend/js/jquery-3.2.1.min.js"></script>
    <script  src="<?php echo base_url() ?>public/frontend/js/bootstrap.min.js"></script>
    <!---->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick-theme.css"/>
    <!--slide-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style.css">
</head>
<body>
    <div id="wrapper">
        <!---->
        <!--HEADER-->
        <div id="header">
            <div id="header-top">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-6" id="header-text">
                            <a>Nhóm 04 - Công nghệ Web tiên tiến</a><b> Website xây dựng cây phả hệ </b>
                        </div>
                        <div class="col-md-6">
                            <nav id="header-nav-top">
                                <ul class="list-inline pull-right" id="headermenu">
                                    <?php if(isset($_SESSION['taikhoan'])) : ?>
                                        <li style="color: red">Xin chào : <?php echo "Admin"?></li>
                                        <li><a href="/WebPhaHe/admin/">(Quay lại trang Admin)</a></li>
                                        <?php else : ?>
                                            <?php if(isset($_SESSION['name'])) : ?>
                                                <li style="color: red">Xin chào : <?php echo $_SESSION['name'] ?></li>
                                                <li>
                                                    <a href=""><i class="fa fa-user"></i> Quản lý tài khoản <i class="fa fa-caret-down"></i></a>
                                                    <ul id="header-submenu">
                                                        <li><a href="detailuser.php"><i class="fa fa-share-square-o"></i> Thông tin</a></li>
                                                        <li><a href="dangxuat.php"><i class="fa fa-share-square-o"></i> Đăng xuất</a></li>
                                                    </ul>
                                                </li>
                                                <?php else : ?>
                                                    <li>
                                                        <a href="dangnhap.php"><i class="fa fa-unlock"></i> Đăng nhập</a>
                                                    </li>
                                                    <li>
                                                        <a href="dangky.php"><i class="fa fa-unlock"></i> Đăng ký</a>
                                                    </li>
                                                <?php endif ?>
                                            <?php endif ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row" id="header-main">
                            <div class="col-md-5">
                                <a href="index.php">
                                    <img src="<?php echo base_url() ?>public/frontend/images/banner1.jpg" height="60">
                                </a>
                            </div>
                            <div class="col-md-4">
                           <!-- <form class="form-inline">
                                <div class="form-group">
                                    <label>
                                        <select name="category" class="form-control">
                                            <option> Tất cả danh mục</option>
                                        </select>
                                    </label>
                                    <input type="text" name="keywork" placeholder=" nhập  cần tìm" class="form-control">
                                </div>
                            </form> -->
                        </div>
                        <div class="col-md-3" id="header-right">
                            <div class="pull-right">
                                <div class="pull-left">
                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                </div>
                                <div class="pull-right">
                                    <p id="hotline">HOTLINE</p>
                                    <p>0969991097</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END HEADER-->
            <!--MENUNAV-->
            <div id="menunav">
                <div class="container">
                    <nav>
                        <div class="home pull-left">
                            <a href="index.php">Trang chủ</a>
                        </div>
                        <!--menu main-->
                        <ul id="menu-main">

                            <li>
                                <a href="baicung.php">Bài cúng cổ truyền</a>
                            </li>
                            <li>
                                <a href="danhsachcay.php">Xem cây phả hệ</a>
                            </li>
                            <?php if(isset($_SESSION['name']) || isset($_SESSION['taikhoan'])) : ?>
                                <li>
                                    <a href="quanlycayuser.php">Quản lý cây phả hệ</a>
                                </li>
                            <?php endif ?>
                            <li>
                                <a href="phanhoi.php">Phản hồi</a>
                            </li>
                        </ul>
                        <!-- end menu main-->
                    </nav>
                </div>
            </div>
            <!--ENDMENUNAV-->
            <div id="maincontent">
                <div class="container">
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Trang chủ admin</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url() ?>public/admin/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url() ?>public/admin/css/sb-admin.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo base_url() ?>public/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                
                <!-- Top Menu Items -->
                
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="<?php echo base_url() ?>admin"><i class="fa fa-fw fa-dashboard"></i> Trang điều khiển</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'user' ? 'active' : '' ?>">
                            <a href="<?php echo modules("user") ?>"><i class="fa fa-user"></i>  Quản lý Người dùng</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'admin' ? 'active' : '' ?>">
                            <a href="<?php echo modules("admin") ?>"><i class="fa fa-user"></i>  Admin</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'Tree' ? 'active' : '' ?>">
                            <a href="<?php echo modules("Tree") ?>"><i class="fa fa-database"></i>  Quản lý cây phả hệ</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'baicung' ? 'active' : '' ?>">
                            <a href="<?php echo modules("baicung") ?>"><i class="fa fa-database"></i>  Quản lý bài cúng</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>"><i class="fa fa-fw fa-edit"></i> Chuyển sang trang chủ</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>/admin/dangxuat.php"><i class="fa fa-share-square-o"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </div>
                </nav>
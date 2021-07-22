<?php
require_once __DIR__ . "/../autoload/autoload.php";
if (!isset($_SESSION['id'])) {
    header('location: dangnhap.php');
}
?>
<?php require_once __DIR__ . "/layouts/header.php" ?>;
<!-- /.navbar-collapse -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Trang chủ admin
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.php">Trang điều khiển</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Trang chủ admin
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<?php require_once __DIR__ . "/layouts/footer.php" ?>;
            
        
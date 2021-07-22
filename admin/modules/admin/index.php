<?php
$open = "admin";
require_once __DIR__ . "/../../../autoload/autoload.php";
if (isset($_GET['page'])) {
    $p = $_GET['page'];
} else {
    $p = 1;
}

$sql = "SELECT * FROM user ORDER BY id DESC";
//_debug($sql);
$admin = $db->fetchJone('admin', $sql, $p, 8, true);
if (isset($admin['page'])) {
    $sotrang = $admin['page'];
    unset($admin['page']);
}

$admin = $db->fetchAll("admin");
?>
<?php require_once __DIR__ . "/../../layouts/header.php" ?>;
<!-- /.navbar-collapse -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách Admin
                    <a href="them.php" class="btn btn-info">Thêm mới Admin</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="/WebPhaHe/admin/index.php">Trang điều khiển</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Admin
                    </li>
                </ol>
                <div class="clearfix"></div>
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success'];
                        unset($_SESSION['success']) ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error'];
                        unset($_SESSION['error']) ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>Họ và Tên</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $stt = 1;
                        foreach ($admin as $item): ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['name'] ?></td>
                                <td><?php echo $item['sex'] ?></td>
                                <td><?php echo $item['birth'] ?></td>
                                <td><?php echo $item['address'] ?></td>
                                <td><?php echo $item['phone'] ?></td>
                                <td><?php echo $item['mail'] ?></td>
                                <td>
                                    <a class="btn btn-xs btn-info" href="sua.php?id=<?php echo $item['id'] ?>">Sửa</a>
                                </td>
                            </tr>
                            <?php $stt++; endforeach ?>
                        </tbody>
                    </table>
                    <div class="pull-right">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <?php for ($i = 1; $i <= $sotrang; $i++): ?>
                                    <?php
                                    if (isset($_GET['page'])) {
                                        $p = $_GET['page'];
                                    } else {
                                        $p = 1;
                                    }
                                    ?>
                                    <li class="<?php echo ($i == $p) ? 'active' : '' ?>">
                                        <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php endfor; ?>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<?php require_once __DIR__ . "/../../layouts/footer.php" ?>;
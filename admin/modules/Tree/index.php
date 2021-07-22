<?php
$open = "tree";
require_once __DIR__ . "/../../../autoload/autoload.php";
if (isset($_GET['page'])) {
    $p = $_GET['page'];
} else {
    $p = 1;
}

$sql = "SELECT * FROM tree ORDER BY id DESC";
//_debug($sql);
$tree = $db->fetchJone('tree', $sql, $p, 8, true);
if (isset($tree['page'])) {
    $sotrang = $tree['page'];
    unset($tree['page']);
}

$tree = $db->fetchAll("tree");
?>
<?php require_once __DIR__ . "/../../layouts/header.php" ?>;
<!-- /.navbar-collapse -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách Cây phả hệ
                    <a href="themto.php" class="btn btn-info">Thêm mới Cây phả hệ</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="/WebPhaHe/admin/index.php">Trang điều khiển</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Cây phả hệ
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
                            <th>Tên Cây Phả Hệ</th>
                            <th>Người tạo</th>
                            <th>ID Người tạo</th>
                            <th>Ngày tạo</th>
                            <th>Mô tả</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $stt = 1;
                        foreach ($tree as $item): ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['name'] ?></td>
                                <td>
                                    <?php $usertree = $db->fetchID("user", $item['iduser']); ?>
                                    <?php echo $usertree['name'] ?>
                                </td>
                                <td><?php echo $item['iduser'] ?></td>
                                <td><?php echo $item['date'] ?></td>
                                <td><?php echo $item['des'] ?></td>
                                <td>
                                    <a class="btn btn-xs btn-info" href="themman.php?id=<?php echo $item['id'] ?>">Thêm
                                        người</a>
                                </td>
                                <td>
                                    <li><a class="btn btn-xs btn-info" href="sua.php?id=<?php echo $item['id'] ?>">Sửa
                                            cây</a></li>
                                    <li><a class="btn btn-xs btn-info"
                                           href="danhsachsua.php?id=<?php echo $item['id'] ?>">Sửa người</a></li>
                                </td>
                                <td>
                                    <li><a class="btn btn-xs btn-danger" href="xoa.php?id=<?php echo $item['id'] ?>">Xoá
                                            cây</a></li>
                                    <li><a class="btn btn-xs btn-danger"
                                           href="danhsachxoa.php?id=<?php echo $item['id'] ?>">Xoá người</a></li>
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


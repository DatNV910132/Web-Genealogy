<?php
require_once __DIR__ . "/autoload/autoload.php";
$sql = "SELECT * FROM tree";
$tree = $db->fetchsql($sql);
?>
<?php require_once __DIR__ . "/layouts/header.php" ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh sách Cây phả hệ
            </h1>
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
                        <th></th>
                        <th>Tên Cây Phả Hệ</th>
                        <th>Ngày tạo</th>
                        <th>Mô tả</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $stt = 1;
                    foreach ($tree as $item): ?>
                        <tr>
                            <td><?php echo $stt ?></td>
                            <td><a href="drawtree/danhsach.php?id=<?php echo $item['id'] ?>">
                                    <img src="<?php echo uploads() ?>user/giapha.jpg" class="" width="100%" height="180">
                                </a></td>
                            <td><a href="drawtree/danhsach.php?id=<?php echo $item['id'] ?>">
                                    <?php echo $item['name'] ?>
                                </a>
                                <br/>
                                <a class="btn btn-xs btn-info" href="drawtree/danhsach.php?id=<?php echo $item['id'] ?>">Xem sơ đồ cây phả hệ</a>
                            </td>
                            <td><?php echo $item['date'] ?></td>
                            <td><?php echo $item['des'] ?></td>
                        </tr>
                        <?php $stt++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php require_once __DIR__ . "/layouts/footer.php" ?>
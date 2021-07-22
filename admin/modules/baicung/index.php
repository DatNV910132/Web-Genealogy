<?php
$open = "baicung";
require_once __DIR__. "/../../../autoload/autoload.php";
if(isset($_GET['page'])){
    $p = $_GET['page'];
}
else{
    $p = 1;
}

$sql = "SELECT * FROM baicung ORDER BY id DESC";
    //_debug($sql);
$baicung = $db -> fetchJone('baicung', $sql, $p, 8, true);
if(isset($baicung['page'])){
    $sotrang = $baicung['page'];
    unset($baicung['page']);
}

$baicung = $db -> fetchAll("baicung");
?>
<?php require_once __DIR__. "/../../layouts/header.php" ?>;
<!-- /.navbar-collapse -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách bài cúng cổ truyền
                    <a href="them.php" class="btn btn-info">Thêm mới bài cúng</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="/WebPhaHe/admin/index.php">Trang điều khiển</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Bài cúng
                    </li>
                </ol>
                <div class="clearfix"></div>
                <?php if(isset($_SESSION['success'])) :?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
                    </div>
                <?php endif ;?>
                <?php if(isset($_SESSION['error'])) :?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']) ?>
                    </div>
                <?php endif ;?>
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
                                <th>Tên bài cúng</th>
                                <th>Ngày âm lịch</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt = 1; foreach ($baicung as $item): ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['name'] ?></td>
                                <td><?php echo $item['date'] ?></td>
                                <td>
                                    <a class="btn btn-xs btn-info" href="sua.php?id=<?php echo $item['id'] ?>">Sửa</a>
                                </td>
                                <td>
                                    <a class="btn btn-xs btn-danger" href="xoa.php?id=<?php echo $item['id'] ?>">Xoá</a>
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
                        <?php for ($i = 1 ; $i <= $sotrang ; $i++): ?>
                            <?php
                            if(isset($_GET['page'])){
                                $p = $_GET['page'];
                            }
                            else{
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
<?php require_once __DIR__. "/../../layouts/footer.php" ?>;


<?php
require_once __DIR__ . "/../../../autoload/autoload.php";
$id = intval(getInput("id"));
$edittree = $db -> fetchID("tree",$id);
$data = [
    "iduser" => $edittree['iduser'],
    "idper0" => $edittree['idper0'],
    "name" => postInput('name'),
    "des" => postInput('des')

];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $error = [];

    if (postInput('name') == '') {
        $error['name'] = "Mời bạn nhập đầy đủ họ tên";
    }
    if (postInput('des') == '') {
        $error['des'] = "Mời bạn nhập mô tả";
    }

    if (empty($error)) {

        $id_update = $db->update("tree", $data, array("id" => $id));
        if ($id_update > 0) {
            $_SESSION['success'] = " Cập nhật thành công";
            redirectAdmin("Tree");
        } else {
            $_SESSION['error'] = "Cập nhật thất bại";
        }
    }

}
?>
<?php require_once __DIR__ . "/../../layouts/header.php" ?>;
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Thêm mới cây phả hệ
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="/WebPhaHe/admin/index.php">Trang điều khiển</a>
                    </li>
                    <li>
                        <a href="index.php">Quản lý Cây phả hệ</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Sửa cây phả hệ
                    </li>
                </ol>
                <div class="clearfix"></div>
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
                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Chọn User</label>
                        <div class="col-sm-8">
                            <select class="form-control col-md-8" name="iduser" disabled>
                                <option value="">- Mời bạn chọn user -</option>
                                <option value="<?php echo $edittree['iduser']?>" selected><?php echo $edittree['iduser']?></option>
                            </select>
                            <?php if(isset($error['iduser'])): ?>
                                <p class="text-danger"> <?php echo $error['iduser'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Chọn tổ tiên</label>
                        <div class="col-sm-8">
                            <select class="form-control col-md-8" name="idper0" disabled >
                                <option value="">- Mời bạn chọn tổ tiên -</option>
                                <?php $to = $db -> fetchID("person0",$edittree['idper0']); ?>
                                    <option value="<?php echo $to['id'] ?>" selected><?php echo $to['name'],", id: ",$to['id']  ?></option>
                            </select>
                            <?php if(isset($error['idper0'])): ?>
                                <p class="text-danger"> <?php echo $error['idper0'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Tên gia phả(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Nguyễn Tộc" name="name"
                                   value="<?php echo $edittree['name'] ?>">
                            <?php if (isset($error['name'])): ?>
                                <p class="text-danger"> <?php echo $error['name'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Mô tả(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Nguyễn Tộc" name="des"
                                   value="<?php echo $edittree['des'] ?>">
                            <?php if (isset($error['des'])): ?>
                                <p class="text-danger"> <?php echo $error['des'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info"> Lưu</button>
                        </div>
                    </div>
                </form>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <?php require_once __DIR__ . "/../../layouts/footer.php" ?>;
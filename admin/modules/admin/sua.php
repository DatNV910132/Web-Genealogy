<?php
require_once __DIR__ . "/../../../autoload/autoload.php";
$id = intval(getInput("id"));
$detailadmin = $db->fetchID("admin", $id);
if (empty($detailadmin)) {
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin("admin");
}

$data = [
    "name" => postInput('name'),
    "sex" => postInput('sex'),
    "birth" => postInput('birth'),
    "phone" => postInput('phone'),
    "address" => postInput('address'),
    "mail" => postInput('mail')
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $error = [];

    if (postInput('name') == '') {
        $error['name'] = "Mời bạn nhập đầy đủ họ tên";
    }

    if (postInput('mail') == '') {
        $error['mail'] = "Mời bạn nhập email";
    }

    if (postInput('phone') == '') {
        $error['phone'] = "Mời bạn nhập số điện thoại";
    }

    if (postInput('birth') == '') {
        $error['birth'] = "Mời bạn nhập ngày tháng năm sinh";
    }

    if (postInput('address') == '') {
        $error['address'] = "Mời bạn nhập địa chỉ";
    }

    if (empty($error)) {

        $id_update = $db->update("admin", $data, array("id" => $id));
        if ($id_update > 0) {
            $_SESSION['success'] = "Cập nhật thành công";
            redirectAdmin("admin");
        } else {
            $_SESSION['error'] = "Cập nhật thất bại";
            redirectAdmin("admin");
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
                    Sửa thông tin Admin
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="/WebPhaHe/admin/index.php">Trang điều khiển</a>
                    </li>
                    <li>
                        <a href="index.php">Quản lý Admin</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Sửa thông tin Admin
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
                        <label for="inputEmail3" class="col-sm-2 control-label">Họ và tên(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Nguyễn Văn Đạt" name="name"
                                   value="<?php echo $detailadmin['name'] ?>">
                            <?php if (isset($error['name'])): ?>
                                <p class="text-danger"> <?php echo $error['name'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Giới tính(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Nam" name="sex"
                                   value="<?php echo $detailadmin['sex'] ?>">
                            <?php if (isset($error['sex'])): ?>
                                <p class="text-danger"> <?php echo $error['sex'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Ngày sinh(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="09/10/1997" name="birth"
                                   value="<?php echo $detailadmin['birth'] ?>">
                            <?php if (isset($error['birth'])): ?>
                                <p class="text-danger"> <?php echo $error['birth'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Số điện thoại(*)</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" placeholder="0123456789" name="phone"
                                       value="<?php echo $detailadmin['phone'] ?>">
                                <?php if (isset($error['phone'])): ?>
                                    <p class="text-danger"> <?php echo $error['phone'] ?></p>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ(*)</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Xuân Kiên, Xuân Trường, Nam Định"
                                       name="address" value="<?php echo $detailadmin['address'] ?>">
                                <?php if (isset($error['address'])): ?>
                                    <p class="text-danger"> <?php echo $error['address'] ?></p>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email(*)</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" placeholder="nguyendatbk910@gmail.com"
                                       name="mail" value="<?php echo $detailadmin['mail'] ?>">
                                <?php if (isset($error['mail'])): ?>
                                    <p class="text-danger"> <?php echo $error['mail'] ?></p>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info"> Lưu</button>
                            </div>
                        </div>
                </form>
                </section>
            </div>
            <?php require_once __DIR__ . "/../../layouts/footer.php" ?>;n
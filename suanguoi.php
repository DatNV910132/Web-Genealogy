<?php
require_once __DIR__ . "/autoload/autoload.php";
$id = intval(getInput("id"));
$lv = strval(getInput("level"));
$idtree = intval(getInput("idtree"));
$editperson = $db->fetchID('person' . $lv, $id);
$data = [
    "id_father" => $editperson['id_father'],
    "name" => postInput('name'),
    "birth" => postInput('birth'),
    "death" => postInput('death'),
    "address" => postInput('address'),
    "phone" => postInput('phone'),
    "mail" => postInput('mail'),
    "lv" => $editperson['lv']
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $error = [];

    if (postInput('name') == '') {
        $error['name'] = "Mời bạn nhập đầy đủ họ tên";
    }


    if (empty($error)) {
        $table = 'person' . $data['lv'];
        $id_update = $db->update($table, $data, array("id" => $id));
        if ($id_update > 0) {
            $_SESSION['success'] = "Sửa thành công";
            redirect("danhsachsua.php?id=$idtree");
        } else {
            $_SESSION['error'] = "Sửa thất bại";
            redirect("danhsachsua.php?id=$idtree");
        }
    }

}
?>
    <SCRIPT LANGUAGE="JavaScript">
        function confirmAction() {
            return confirm("Bạn có chắc sẽ làm điều dại dột này ?")
        }

    </SCRIPT>
<?php require_once __DIR__ . "/layouts/header.php" ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Sửa Thành viên Cây phả hệ
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
            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Họ và tên(*)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Nguyễn Văn Đạt" name="name"
                               value="<?php echo $editperson['name'] ?>">
                        <?php if (isset($error['name'])): ?>
                            <p class="text-danger"> <?php echo $error['name'] ?></p>
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Ngày sinh</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="09/10/1997" name="birth"
                               value="<?php echo $editperson['birth'] ?>">
                        <?php if (isset($error['birth'])): ?>
                            <p class="text-danger"> <?php echo $error['birth'] ?></p>
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Ngày mất</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="09/10/1997" name="death"
                               value="<?php echo $editperson['death'] ?>">
                        <?php if (isset($error['death'])): ?>
                            <p class="text-danger"> <?php echo $error['death'] ?></p>
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Xuân Kiên, Xuân Trường, Nam Định"
                               name="address" value="<?php echo $editperson['address'] ?>">
                        <?php if (isset($error['address'])): ?>
                            <p class="text-danger"> <?php echo $error['address'] ?></p>
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Số điện thoại</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" placeholder="0123456789" name="phone"
                               value="<?php echo $editperson['phone'] ?>">
                        <?php if (isset($error['phone'])): ?>
                            <p class="text-danger"> <?php echo $error['phone'] ?></p>
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" placeholder="nguyendatbk910@gmail.com" name="mail"
                               value="<?php echo $editperson['mail'] ?>">
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
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

<?php require_once __DIR__ . "/layouts/footer.php" ?>
<?php
require_once __DIR__. "/autoload/autoload.php";
$id = $_SESSION['id'];
$data = [
    "iduser" => postInput('iduser'),
    "idper0" => postInput('idper0'),
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
    if (postInput('idper0') == '') {
        $error['idper0'] = "Mời bạn nhập tổ tiên";
    }else{
        $is_check = $db ->fetchOne("tree", " id = '".$data['idper0']."' ");
        if($is_check != NULL){
            $error['idper0'] = "Tổ tiên đã ở một gia phả khác";
        }
    }

    if (empty($error)) {

        $id_insert = $db->insert("tree", $data);
        if ($id_insert > 0) {
            $_SESSION['success'] = " Thêm mới thành công";
            redirect("quanlycayuser.php");
        } else {
            $_SESSION['error'] = "Thêm mới thất bại";
        }
    }

}
?>
<?php require_once __DIR__. "/layouts/header.php" ?>;
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Thêm mới cây phả hệ
                </h1>
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
                            <select class="form-control col-md-8" name="iduser" onchange="genderChanged(this)">
                                <?php $user = $db -> fetchID("user",$id); ?>
                                    <option value="<?php echo $user['id'] ?>"><?php echo $user['name'],", id: ",$user['id']  ?></option>
                            </select>
                            <?php if(isset($error['iduser'])): ?>
                                <p class="text-danger"> <?php echo $error['iduser'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Chọn tổ tiên</label>
                        <div class="col-sm-8">
                            <select class="form-control col-md-8" name="idper0" onchange="genderChanged(this)">
                                <option value="">- Mời bạn chọn tổ tiên -</option>
                                <?php $person0 = $db -> fetchAll("person0"); ?>
                                <?php foreach ($person0 as $item): ?>
                                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'],", id: ",$item['id']  ?></option>
                                <?php endforeach ?>
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
                                   value="<?php echo $data['name'] ?>">
                            <?php if (isset($error['name'])): ?>
                                <p class="text-danger"> <?php echo $error['name'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Mô tả(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Nguyễn Tộc" name="des"
                                   value="<?php echo $data['des'] ?>">
                            <?php if (isset($error['des'])): ?>
                                <p class="text-danger"> <?php echo $error['des'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info"> Thêm mới</button>
                        </div>
                    </div>
                </form>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<?php require_once __DIR__. "/layouts/footer.php" ?>;
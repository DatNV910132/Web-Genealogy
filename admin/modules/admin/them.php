<?php
require_once __DIR__. "/../../../autoload/autoload.php";
$data = [
    "taikhoan" => postInput('taikhoan'),
    "pass" => MD5(postInput('pass')),
    "name" => postInput('name'),
    "sex" => postInput('sex'),
    "birth" => postInput('birth'),
    "address" => postInput('address'),
    "phone" => postInput('phone'),
    "mail" => postInput('mail')
];
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $error = [];

    if(postInput('name') == ''){
        $error['name'] = "Mời bạn nhập đầy đủ họ tên";
    }

    if(postInput('taikhoan') == ''){
        $error['taikhoan'] = "Mời bạn nhập tài khoản admin";
    }

    if(postInput('sex') == ''){
        $error['sex'] = "Mời bạn nhập giới tính";
    }

    if(postInput('mail') == ''){
        $error['mail'] = "Mời bạn nhập email";
    }
    else{
        $is_check = $db ->fetchOne("admin", " mail = '".$data['mail']."' ");
        if($is_check != NULL){
            $error['mail'] = "Email đã tồn tại";
        }
    }

    if(postInput('phone') == ''){
        $error['phone'] = "Mời bạn nhập số điện thoại";
    }

    if(postInput('birth') == ''){
        $error['birth'] = "Mời bạn nhập ngày tháng năm sinh";
    }

    if(postInput('address') == ''){
        $error['address'] = "Mời bạn nhập địa chỉ";
    }

    if(postInput('pass') == ''){
        $error['pass'] = "Mời bạn nhập mật khẩu";
    }

    if($data['pass'] != MD5(postInput("re_matkhau"))){
        $error['pass'] = "Mật khẩu không khớp";
    }

    if(empty($error)){

        $id_insert = $db -> insert("admin", $data);
        if($id_insert > 0){
            $_SESSION['success'] = " Thêm mới thành công";
            redirectAdmin("admin");
        }
        else{
            $_SESSION['error'] = "Thêm mới thất bại";
        }
    }

}
?>
<?php require_once __DIR__. "/../../layouts/header.php" ?>;
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Thêm mới Admin
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="/WebPhaHe/admin/index.php">Trang điều khiển</a>
                    </li>
                    <li>
                        <a href="index.php">Quản lý Admin</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Thêm mới Admin
                    </li>
                </ol>
                <div class="clearfix"></div>
                <?php if(isset($_SESSION['error'])) :?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']) ?>
                    </div>
                <?php endif ;?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" >Tài Khoản(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="NguyenDat910" name="taikhoan" value="<?php echo $data['taikhoan'] ?>">
                            <?php if(isset($error['taikhoan'])): ?>
                                <p class="text-danger"> <?php echo $error['taikhoan'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" >Họ và tên(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Nguyễn Văn Đạt" name="name" value="<?php echo $data['name'] ?>">
                            <?php if(isset($error['name'])): ?>
                                <p class="text-danger"> <?php echo $error['name'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" >Giới tính(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Nam" name="sex" value="<?php echo $data['sex'] ?>">
                            <?php if(isset($error['sex'])): ?>
                                <p class="text-danger"> <?php echo $error['sex'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" >Ngày sinh(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="09/10/1997" name="birth" value="<?php echo $data['birth'] ?>">
                            <?php if(isset($error['birth'])): ?>
                                <p class="text-danger"> <?php echo $error['birth'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" >Địa chỉ(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Xuân Kiên, Xuân Trường, Nam Định" name="address" value="<?php echo $data['address'] ?>">
                            <?php if(isset($error['address'])): ?>
                                <p class="text-danger"> <?php echo $error['address'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" >Số điện thoại(*)</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" placeholder="0123456789" name="phone" value="<?php echo $data['phone'] ?>">
                            <?php if(isset($error['phone'])): ?>
                                <p class="text-danger"> <?php echo $error['phone'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" >Email(*)</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" placeholder="nguyendatbk910@gmail.com" name="mail" value="<?php echo $data['mail'] ?>">
                            <?php if(isset($error['mail'])): ?>
                                <p class="text-danger"> <?php echo $error['mail'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" >Mật khẩu(*)</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" placeholder="********" name="pass">
                            <?php if(isset($error['pass'])): ?>
                                <p class="text-danger"> <?php echo $error['pass'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" >Nhập lại mật khẩu(*)</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" placeholder="********" name="re_matkhau" required="" >
                            <?php if(isset($error['re_matkhau'])): ?>
                                <p class="text-danger"> <?php echo $error['re_matkhau'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info"> Thêm mới </button>
                        </div>
                    </div>
                </form>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <?php require_once __DIR__. "/../../layouts/footer.php" ?>;
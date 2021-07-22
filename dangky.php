<?php
require_once __DIR__. "/autoload/autoload.php";
$data = [
    "pass" => MD5(postInput('pass')),
    "name" => postInput('name'),
    "imageuser" => postInput('imageuser'),
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

    if(postInput('mail') == ''){
        $error['mail'] = "Mời bạn nhập email";
    }
    else{
        $is_check = $db ->fetchOne("user", " mail = '".$data['mail']."' ");
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

    if(!isset($_FILES['imageuser'])){
            $error['imageuser'] = "Mời bạn chọn ảnh";
        }
    
    if(empty($error)){

        if(isset($_FILES['imageuser'])){
                $file_name = $_FILES['imageuser']['name'];
                $file_tmp = $_FILES['imageuser']['tmp_name'];
                $file_type = $_FILES['imageuser']['type'];
                $file_erro = $_FILES['imageuser']['error'];
                if($file_erro == 0){
                    $part = ROOT ."user/";
                    $data['imageuser'] = $file_name;
                }
            }

        $id_insert = $db -> insert("user", $data);
        if($id_insert > 0){
            move_uploaded_file($file_tmp, $part.$file_name);
            $_SESSION['success'] = " Đăng ký thành công! Mời bạn đăng nhập";
            header("location: dangnhap.php");
        }
        else{
            $_SESSION['error'] = "Đăng ký thất bại";
        }
    }   
    
}
?>
<?php require_once __DIR__. "/layouts/header.php" ?>;

<div class="col-md-9 bor">

    <section class="box-main1">
        <h3 class="title-main"><a href=""> Đăng ký thành viên</a> </h3>
        <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data" style="margin-top: 20px">
         <div class="clearfix"></div>
         <?php if(isset($_SESSION['error'])) :?>
             <div class="alert alert-danger">
                 <?php echo $_SESSION['error']; unset($_SESSION['error']) ?>
             </div>
         <?php endif ;?>
         <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label" >Hình ảnh</label>
            <div class="col-sm-8">
                <input type="file" class="form-control" name="imageuser">
                <?php if(isset($error['imageuser'])): ?>
                    <p class="text-danger"> <?php echo $error['imageuser'] ?></p>
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
                <button type="submit" class="btn btn-info"> Đăng ký </button>
            </div>
        </div>
        
    </form>
</section>
</div>
<?php require_once __DIR__. "/layouts/footer.php" ?>;
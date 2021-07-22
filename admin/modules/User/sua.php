<?php
require_once __DIR__. "/../../../autoload/autoload.php";
$id = intval(getInput("id"));
$detailuser = $db -> fetchID("user",$id);
if(empty($detailuser)){
	$_SESSION['error'] = "Dữ liệu không tồn tại";
	redirectAdmin("user");
}

$data = [
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

	if(postInput('phone') == ''){
		$error['phone'] = "Mời bạn nhập số điện thoại";
	}

	if(postInput('birth') == ''){
		$error['birth'] = "Mời bạn nhập ngày tháng năm sinh";
	}

	if(postInput('address') == ''){
		$error['address'] = "Mời bạn nhập địa chỉ";
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

		$id_update = $db -> update("user", $data, array("id" => $id));
		if($id_update > 0){
			move_uploaded_file($file_tmp, $part.$file_name);
			$_SESSION['success'] = "Cập nhật thành công";
			redirectAdmin("user");
		}
		else{
			$_SESSION['error'] = "Cập nhật thất bại";
			redirectAdmin("user");
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
					Sửa thông tin người dùng
				</h1>
				<ol class="breadcrumb">
					<li>
						<i class="fa fa-dashboard"></i>  <a href="/WebPhaHe/admin/index.php">Trang điều khiển</a>
					</li>
					<li>
						<a href="index.php">Quản lý người dùng</a>
					</li>
					<li class="active">
						<i class="fa fa-file"></i> Sửa thông tin người dùng
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
						<label for="inputEmail3" class="col-sm-2 control-label" >Hình ảnh</label>
						<div class="col-sm-8">
							<input type="file" class="form-control" name="imageuser">
							<?php if(isset($error['imageuser'])): ?>
								<p class="text-danger"> <?php echo $error['imageuser'] ?></p>
							<?php endif ?>
							<img src="<?php echo uploads() ?>user/<?php echo $detailuser['imageuser'] ?>" width="50px" height="50px" >
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label" >Họ và tên(*)</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" placeholder="Nguyễn Văn Đạt" name="name" value="<?php echo $detailuser['name'] ?>">
							<?php if(isset($error['name'])): ?>
								<p class="text-danger"> <?php echo $error['name'] ?></p>
							<?php endif ?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label" >Giới tính(*)</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" placeholder="Nam" name="sex" value="<?php echo $detailuser['sex'] ?>">
							<?php if(isset($error['sex'])): ?>
								<p class="text-danger"> <?php echo $error['sex'] ?></p>
							<?php endif ?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label" >Ngày sinh(*)</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" placeholder="09/10/1997" name="birth" value="<?php echo $detailuser['birth'] ?>">
							<?php if(isset($error['birth'])): ?>
								<p class="text-danger"> <?php echo $error['birth'] ?></p>
							<?php endif ?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label" >Địa chỉ(*)</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" placeholder="Xuân Kiên, Xuân Trường, Nam Định" name="address" value="<?php echo $detailuser['address'] ?>">
							<?php if(isset($error['address'])): ?>
								<p class="text-danger"> <?php echo $error['address'] ?></p>
							<?php endif ?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label" >Số điện thoại(*)</label>
						<div class="col-sm-8">
							<input type="number" class="form-control" placeholder="0123456789" name="phone" value="<?php echo $detailuser['phone'] ?>">
							<?php if(isset($error['phone'])): ?>
								<p class="text-danger"> <?php echo $error['phone'] ?></p>
							<?php endif ?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label" >Email(*)</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" placeholder="nguyendatbk910@gmail.com" name="mail" value="<?php echo $detailuser['mail'] ?>">
							<?php if(isset($error['mail'])): ?>
								<p class="text-danger"> <?php echo $error['mail'] ?></p>
							<?php endif ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info"> Lưu </button>
						</div>
					</div>
				</form>
			</section>
		</div>
		<?php require_once __DIR__. "/../../layouts/footer.php" ?>;n
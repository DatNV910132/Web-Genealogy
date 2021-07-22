<?php
require_once __DIR__. "/autoload/autoload.php";
$id = $_SESSION['id'];
$detailuser = $db -> fetchID("user",$id);
?>
<?php require_once __DIR__. "/layouts/header.php" ?>;
<div class="col-md-9 bor">
	<section class="box-main1">
		<h3 class="title-main"><a href=""> Thông tin người dùng</a> </h3>
		<form action="" method="POST" class="form-horizontal" enctype="multipart/form-data" style="margin-top: 20px">
			<div class="clearfix"></div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label" >Hình ảnh</label>
				<img src="<?php echo uploads() ?>user/<?php echo $detailuser['imageuser'] ?>" class="" width="40%" height="40%">
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label" >Họ và tên</label>
				<div class="col-sm-8">
					<input type="text" readonly="" class="form-control" placeholder="Nguyễn Văn Thắng" name="name" value="<?php echo $detailuser['name'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label" >Giới tính</label>
				<div class="col-sm-8">
					<input type="text" readonly="" class="form-control" placeholder="Nam" name="sex" value="<?php echo $detailuser['sex'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label" >Ngày sinh</label>
				<div class="col-sm-8">
					<input type="text" readonly="" class="form-control" placeholder="09/10/1997" name="birth" value="<?php echo $detailuser['birth'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label" >Địa chỉ</label>
				<div class="col-sm-8">
					<input type="text" readonly=""  class="form-control" placeholder="Xuân Kiên, Xuân Trường, Nam Định" name="address" value="<?php echo $detailuser['address'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label" >Số điện thoại</label>
				<div class="col-sm-8">
					<input type="number" readonly="" class="form-control" placeholder="0123456789" name="phone" value="<?php echo $detailuser['phone'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label" >Email</label>
				<div class="col-sm-8">
					<input type="email" readonly="" class="form-control" placeholder="Nguyendatbk910@gmail.com" name="mail" value="<?php echo $detailuser['mail'] ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="suauser.php" class="btn btn-info">Sửa thông tin</a>
				</div>
			</div>                     	
		</form>
	</section>
</div>
<?php require_once __DIR__. "/layouts/footer.php" ?>;n
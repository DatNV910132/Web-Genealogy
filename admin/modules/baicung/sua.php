<?php
require_once __DIR__. "/../../../autoload/autoload.php";
$id = intval(getInput("id"));
$detailbaicung = $db -> fetchID("baicung",$id);
if(empty($detailbaicung)){
	$_SESSION['error'] = "Dữ liệu không tồn tại";
	redirectAdmin("baicung");
}

$data = [
	"name" => postInput('name'),
	"date" => postInput('date'),
	"content" => postInput('content')
];
if($_SERVER["REQUEST_METHOD"] == "POST"){

	$error = [];

	if(postInput('name') == ''){
		$error['name'] = "Mời bạn nhập đầy đủ họ tên";
	}

	if(postInput('content') == ''){
		$error['content'] = "Mời bạn nhập nội dung của bài cúng";
	}

	if(empty($error)){

		$id_update = $db -> update("baicung", $data, array("id" => $id));
		if($id_update > 0){
			$_SESSION['success'] = "Cập nhật thành công";
			redirectAdmin("baicung");
		}
		else{
			$_SESSION['error'] = "Cập nhật thất bại";
			redirectAdmin("baicung");
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
					Sửa thông tin bài cúng cổ truyền
				</h1>
				<ol class="breadcrumb">
					<li>
						<i class="fa fa-dashboard"></i>  <a href="/WebPhaHe/admin/index.php">Trang điều khiển</a>
					</li>
					<li>
						<a href="index.php">Quản lý bài cúng</a>
					</li>
					<li class="active">
						<i class="fa fa-file"></i> Sửa thông tin bài cúng cổ truyền
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
						<label for="inputEmail3" class="col-sm-2 control-label" >Tên bài cúng(*)</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" placeholder="Cúng cổ truyền" name="name" value="<?php echo $detailbaicung['name'] ?>">
							<?php if(isset($error['name'])): ?>
								<p class="text-danger"> <?php echo $error['name'] ?></p>
							<?php endif ?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label" >Ngày âm lịch(*)</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" placeholder="09/10" name="date" value="<?php echo $detailbaicung['date'] ?>">
							<?php if(isset($error['date'])): ?>
								<p class="text-danger"> <?php echo $error['date'] ?></p>
							<?php endif ?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label" >Nội dung bài cúng(*)</label>
						<div class="col-sm-8">
							<textarea name="content" cols="100" rows="8">
								<?php echo $detailbaicung['content'] ?>
							</textarea>
							<?php if(isset($error['content'])): ?>
								<p class="text-danger"> <?php echo $error['content'] ?></p>
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
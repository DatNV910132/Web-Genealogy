<?php
require_once __DIR__. "/autoload/autoload.php";
$id = intval(getInput("id"));
$detailbaicung = $db -> fetchID("baicung",$id);
?>
<?php require_once __DIR__. "/layouts/header.php" ?>;

<div class="col-md-9 bor">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <?php echo $detailbaicung['name'] ?>
                    </h1>
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
                            <label for="inputEmail3" class="col-sm-2 control-label" >Nội dung bài cúng</label>
                            <div class="col-sm-8">
							<textarea name="content" cols="110" rows="50" disabled>
								<?php echo $detailbaicung['content'] ?>
							</textarea>
                            </div>
                        </div>
                    </form>
                    </section>
                </div>
</div>

<?php require_once __DIR__. "/layouts/footer.php" ?>;
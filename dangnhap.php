<?php
require_once __DIR__ . "/autoload/autoload.php";
$data = [
    "mail" => postInput('mail'),
    "pass" => (postInput('pass'))
];
$error = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (postInput('mail') == '') {
        $error['mail'] = "Bạn cần nhập email";
    }
    if (postInput('pass') == '') {
        $error['pass'] = "Bạn nhập sai mật khẩu";
    }
    if (empty($error)) {
        $is_check = $db->fetchOne("user", " mail = '" . $data['mail'] . "' AND pass = '" . MD5($data['pass']) . "' ");

        if ($is_check != NULL) {
            $_SESSION['name'] = $is_check['name'];
            $_SESSION['id'] = $is_check['id'];
            echo "<script>alert('Đăng nhập thành công'); location.href='index.php'</script>";
        } else {
            $_SESSION['error'] = "Bạn sai mật khẩu hoặc email";
        }
    }
}

?>
<?php require_once __DIR__ . "/layouts/header.php" ?>;

<div class="col-md-9 bor">

    <section class="box-main1">
        <h3 class="title-main"><a href=""> Đăng nhập</a></h3>

        <?php if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['error'];
                unset($_SESSION['error']) ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success'];
                unset($_SESSION['success']) ?>
            </div>
        <?php endif; ?>
        <form class="form-horizontal" action="" method="POST" style="margin-top: 20px">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="mail"
                           value="<?php echo $data['mail'] ?>">
                    <?php if (isset($error['mail'])): ?>
                        <p class="text-danger"><?php echo $error['mail'] ?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label"> Mật Khẩu</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="********" name="pass">
                    <?php if (isset($error['pass'])): ?>
                        <p class="text-danger"><?php echo $error['pass'] ?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-info">Đăng nhập</button>
                </div>
            </div>
        </form>
    </section>
</div>
<?php require_once __DIR__ . "/layouts/footer.php" ?>;
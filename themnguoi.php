<?php
require_once __DIR__. "/autoload/autoload.php";
$id = intval(getInput("id"));
$detailtree = $db->fetchID("tree", $id);
$person0 = $db->fetchID("person0", $detailtree['idper0']);
$idper0 = intval($person0['id']);
$sql1 = "SELECT * FROM person1 WHERE id_father = $idper0 ";
$person1 = $db->fetchsql($sql1);
$data = [
    "id_father" => postInput('id_father'),
    "name" => postInput('name'),
    "birth" => postInput('birth'),
    "death" => postInput('death'),
    "address" => postInput('address'),
    "phone" => postInput('phone'),
    "mail" => postInput('mail'),
    "lv" => postInput('lv')
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $error = [];

    if (postInput('name') == '') {
        $error['name'] = "Mời bạn nhập đầy đủ họ tên";
    }

    if (empty($error)) {
        $table = 'person'.$data['lv'];
        $id_insert = $db->insert($table,$data);
        if ($id_insert > 0) {
            $_SESSION['success'] = " Thêm mới thành công";
            redirectAdmin("tree");
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
                    Thêm thành viên trong phả hệ
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
                        <label for="text" class="col-sm-2 control-label">Levels</label>
                        <div class="col-sm-8">
                            <select class="form-control col-md-8" name="lv" onchange="validateSelectBox(this)">
                                <option value="">- Mời bạn chọn đời -</option>
                                <option value="1">Đời 1</option>
                                <option value="2">Đời 2</option>
                                <option value="3">Đời 3</option>
                                <option value="4">Đời 4</option>
                                <option value="5">Đời 5</option>
                                <option value="6">Đời 6</option>
                                <option value="7">Đời 7</option>
                                <option value="8">Đời 8</option>
                                <option value="9">Đời 9</option>
                                <option value="10">Đời 10</option>
                            </select>
                            <?php if (isset($error['lv'])): ?>
                                <p class="text-danger"> <?php echo $error['lv'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Chọn cha</label>
                        <div class="col-sm-8">
                            <select class="form-control col-md-8" name="id_father" size="10">
                                <option value="">- Mời bạn chọn cha -</option>
                                <optgroup label="Tổ">
                                    <option value="<?php echo $person0['id'] ?>"><?php echo $person0['name'] ?></option>
                                </optgroup>
                                <optgroup label="Đời 1">
                                    <?php foreach ($person1 as $item): ?>
                                        <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                                    <?php endforeach ?>
                                </optgroup>
                                <optgroup label="Đời 2">
                                    <?php foreach ($person1 as $item1): ?>
                                        <?php $idper1 = intval($item1['id']);
                                        $sql2 = "SELECT * FROM person2 WHERE id_father = $idper1 ";
                                        $person2 = $db->fetchsql($sql2); ?>
                                        <?php foreach ($person2 as $item2): ?>
                                            <option value="<?php echo $item2['id'] ?>"><?php echo $item2['name'] ?>. Con ông: <?php echo $item1['name'] ?></option>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                </optgroup>
                                <optgroup label="Đời 3">
                                    <?php foreach ($person1 as $item1): ?>
                                        <?php $idper1 = intval($item1['id']);
                                        $sql2 = "SELECT * FROM person2 WHERE id_father = $idper1 ";
                                        $person2 = $db->fetchsql($sql2); ?>
                                        <?php foreach ($person2 as $item2): ?>
                                            <?php $idper2 = intval($item2['id']);
                                            $sql3 = "SELECT * FROM person3 WHERE id_father = $idper2 ";
                                            $person3 = $db->fetchsql($sql3); ?>
                                            <?php foreach ($person3 as $item3): ?>
                                                <option value="<?php echo $item3['id'] ?>"><?php echo $item3['name'] ?>. Con ông: <?php echo $item2['name'] ?></option>
                                            <?php endforeach ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                </optgroup>
                                <optgroup label="Đời 4">
                                    <?php foreach ($person1 as $item1): ?>
                                        <?php $idper1 = intval($item1['id']);
                                        $sql2 = "SELECT * FROM person2 WHERE id_father = $idper1 ";
                                        $person2 = $db->fetchsql($sql2); ?>
                                        <?php foreach ($person2 as $item2): ?>
                                            <?php $idper2 = intval($item2['id']);
                                            $sql3 = "SELECT * FROM person3 WHERE id_father = $idper2 ";
                                            $person3 = $db->fetchsql($sql3); ?>
                                            <?php foreach ($person3 as $item3): ?>
                                                <?php $idper3 = intval($item3['id']);
                                                $sql4 = "SELECT * FROM person4 WHERE id_father = $idper3 ";
                                                $person4 = $db->fetchsql($sql4); ?>
                                                <?php foreach ($person4 as $item4): ?>
                                                    <option value="<?php echo $item4['id'] ?>"><?php echo $item4['name'] ?>. Con ông: <?php echo $item3['name'] ?></option>
                                                <?php endforeach ?>
                                            <?php endforeach ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                </optgroup>
                                <optgroup label="Đời 5">
                                    <?php foreach ($person1 as $item1): ?>
                                        <?php $idper1 = intval($item1['id']);
                                        $sql2 = "SELECT * FROM person2 WHERE id_father = $idper1 ";
                                        $person2 = $db->fetchsql($sql2); ?>
                                        <?php foreach ($person2 as $item2): ?>
                                            <?php $idper2 = intval($item2['id']);
                                            $sql3 = "SELECT * FROM person3 WHERE id_father = $idper2 ";
                                            $person3 = $db->fetchsql($sql3); ?>
                                            <?php foreach ($person3 as $item3): ?>
                                                <?php $idper3 = intval($item3['id']);
                                                $sql4 = "SELECT * FROM person4 WHERE id_father = $idper3 ";
                                                $person4 = $db->fetchsql($sql4); ?>
                                                <?php foreach ($person4 as $item4): ?>
                                                    <?php $idper4 = intval($item4['id']);
                                                    $sql5 = "SELECT * FROM person5 WHERE id_father = $idper4 ";
                                                    $person5 = $db->fetchsql($sql5); ?>
                                                    <?php foreach ($person5 as $item5): ?>
                                                        <option value="<?php echo $item5['id'] ?>"><?php echo $item5['name'] ?>. Con ông: <?php echo $item4['name'] ?></option>
                                                    <?php endforeach ?>
                                                <?php endforeach ?>
                                            <?php endforeach ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                </optgroup>
                                <optgroup label="Đời 6">
                                    <?php foreach ($person1 as $item1): ?>
                                        <?php $idper1 = intval($item1['id']);
                                        $sql2 = "SELECT * FROM person2 WHERE id_father = $idper1 ";
                                        $person2 = $db->fetchsql($sql2); ?>
                                        <?php foreach ($person2 as $item2): ?>
                                            <?php $idper2 = intval($item2['id']);
                                            $sql3 = "SELECT * FROM person3 WHERE id_father = $idper2 ";
                                            $person3 = $db->fetchsql($sql3); ?>
                                            <?php foreach ($person3 as $item3): ?>
                                                <?php $idper3 = intval($item3['id']);
                                                $sql4 = "SELECT * FROM person4 WHERE id_father = $idper3 ";
                                                $person4 = $db->fetchsql($sql4); ?>
                                                <?php foreach ($person4 as $item4): ?>
                                                    <?php $idper4 = intval($item4['id']);
                                                    $sql5 = "SELECT * FROM person5 WHERE id_father = $idper4 ";
                                                    $person5 = $db->fetchsql($sql5); ?>
                                                    <?php foreach ($person5 as $item5): ?>
                                                        <?php $idper5 = intval($item5['id']);
                                                        $sql6 = "SELECT * FROM person6 WHERE id_father = $idper5 ";
                                                        $person6 = $db->fetchsql($sql6); ?>
                                                        <?php foreach ($person6 as $item6): ?>
                                                            <option value="<?php echo $item6['id'] ?>"><?php echo $item6['name'] ?>. Con ông: <?php echo $item5['name'] ?></option>
                                                        <?php endforeach ?>
                                                    <?php endforeach ?>
                                                <?php endforeach ?>
                                            <?php endforeach ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                </optgroup>
                                <optgroup label="Đời 7">
                                    <?php foreach ($person1 as $item1): ?>
                                        <?php $idper1 = intval($item1['id']);
                                        $sql2 = "SELECT * FROM person2 WHERE id_father = $idper1 ";
                                        $person2 = $db->fetchsql($sql2); ?>
                                        <?php foreach ($person2 as $item2): ?>
                                            <?php $idper2 = intval($item2['id']);
                                            $sql3 = "SELECT * FROM person3 WHERE id_father = $idper2 ";
                                            $person3 = $db->fetchsql($sql3); ?>
                                            <?php foreach ($person3 as $item3): ?>
                                                <?php $idper3 = intval($item3['id']);
                                                $sql4 = "SELECT * FROM person4 WHERE id_father = $idper3 ";
                                                $person4 = $db->fetchsql($sql4); ?>
                                                <?php foreach ($person4 as $item4): ?>
                                                    <?php $idper4 = intval($item4['id']);
                                                    $sql5 = "SELECT * FROM person5 WHERE id_father = $idper4 ";
                                                    $person5 = $db->fetchsql($sql5); ?>
                                                    <?php foreach ($person5 as $item5): ?>
                                                        <?php $idper5 = intval($item5['id']);
                                                        $sql6 = "SELECT * FROM person6 WHERE id_father = $idper5 ";
                                                        $person6 = $db->fetchsql($sql6); ?>
                                                        <?php foreach ($person6 as $item6): ?>
                                                            <?php foreach ($person5 as $item5): ?>
                                                                <?php $idper5 = intval($item5['id']);
                                                                $sql6 = "SELECT * FROM person6 WHERE id_father = $idper5 ";
                                                                $person6 = $db->fetchsql($sql6); ?>
                                                                <?php foreach ($person6 as $item6): ?>
                                                                    <?php $idper6 = intval($item6['id']);
                                                                    $sql7 = "SELECT * FROM person6 WHERE id_father = $idper6 ";
                                                                    $person7 = $db->fetchsql($sql7); ?>
                                                                    <?php foreach ($person7 as $item7): ?>
                                                                        <option value="<?php echo $item7['id'] ?>"><?php echo $item7['name'] ?>. Con ông: <?php echo $item6['name'] ?></option>
                                                                    <?php endforeach ?>
                                                                <?php endforeach ?>
                                                            <?php endforeach ?>
                                                        <?php endforeach ?>
                                                    <?php endforeach ?>
                                                <?php endforeach ?>
                                            <?php endforeach ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                </optgroup>
                            </select>
                            <?php if (isset($error['id_father'])): ?>
                                <p class="text-danger"> <?php echo $error['id_father'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Họ và tên(*)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Nguyễn Văn Đạt" name="name"
                                   value="<?php echo $data['name'] ?>">
                            <?php if (isset($error['name'])): ?>
                                <p class="text-danger"> <?php echo $error['name'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Ngày sinh</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="09/10/1997" name="birth"
                                   value="<?php echo $data['birth'] ?>">
                            <?php if (isset($error['birth'])): ?>
                                <p class="text-danger"> <?php echo $error['birth'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Ngày mất</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="09/10/1997" name="death"
                                   value="<?php echo $data['death'] ?>">
                            <?php if (isset($error['death'])): ?>
                                <p class="text-danger"> <?php echo $error['death'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Xuân Kiên, Xuân Trường, Nam Định"
                                   name="address" value="<?php echo $data['address'] ?>">
                            <?php if (isset($error['address'])): ?>
                                <p class="text-danger"> <?php echo $error['address'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Số điện thoại</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" placeholder="0123456789" name="phone"
                                   value="<?php echo $data['phone'] ?>">
                            <?php if (isset($error['phone'])): ?>
                                <p class="text-danger"> <?php echo $error['phone'] ?></p>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" placeholder="nguyendatbk910@gmail.com" name="mail"
                                   value="<?php echo $data['mail'] ?>">
                            <?php if (isset($error['mail'])): ?>
                                <p class="text-danger"> <?php echo $error['mail'] ?></p>
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
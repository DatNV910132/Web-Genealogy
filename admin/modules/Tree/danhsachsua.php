<?php
$open = "Tree";
require_once __DIR__ . "/../../../autoload/autoload.php";
$id = intval(getInput("id"));
$detailtree = $db->fetchID("tree", $id);
$idto = intval($detailtree['idper0']);
$sql0 = "SELECT * FROM person0 WHERE id = $idto";
$person0 = $db->fetchID("person0",$detailtree['idper0']);
$person01 = $db->fetchsql($sql0);
$idper0 = intval($person0['id']);
$sql1 = "SELECT * FROM person1 WHERE id_father = $idper0 ";
$person1 = $db->fetchsql($sql1);
$merge = array_merge($person01,$person1);
?>
<?php require_once __DIR__ . "/../../layouts/header.php" ?>;
<!-- /.navbar-collapse -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách thành viên trong phả hệ qua các đời
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="/WebPhaHe/admin/index.php">Trang điều khiển</a>
                    </li>
                    <li>
                        <a href="index.php">Quản lý cây gia phả</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Danh sách thành viên trong phả hệ
                    </li>
                </ol>
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

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>Đời</th>
                            <th>Họ và Tên</th>
                            <th>Ngày sinh</th>
                            <th>Ngày mất</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($person1 as $item1): ?>
                            <?php $idper1 = intval($item1['id']);
                            $sql2 = "SELECT * FROM person2 WHERE id_father = $idper1 ";
                            $person2 = $db->fetchsql($sql2);
                            $merge = array_merge($merge,$person2);
                            ?>
                            <?php foreach ($person2 as $item2): ?>
                                <?php $idper2 = intval($item2['id']);
                                $sql3 = "SELECT * FROM person3 WHERE id_father = $idper2 ";
                                $person3 = $db->fetchsql($sql3);
                                $merge = array_merge($merge,$person3);
                                ?>
                                <?php foreach ($person3 as $item3): ?>
                                    <?php $idper3 = intval($item3['id']);
                                    $sql4 = "SELECT * FROM person4 WHERE id_father = $idper3 ";
                                    $person4 = $db->fetchsql($sql4);
                                    $merge = array_merge($merge,$person4);
                                    ?>
                                    <?php foreach ($person4 as $item4): ?>
                                        <?php $idper4 = intval($item4['id']);
                                        $sql5 = "SELECT * FROM person5 WHERE id_father = $idper4 ";
                                        $person5 = $db->fetchsql($sql5);
                                        $merge = array_merge($merge,$person5);
                                        ?>
                                        <?php foreach ($person5 as $item5): ?>
                                            <?php $idper5 = intval($item5['id']);
                                            $sql6 = "SELECT * FROM person6 WHERE id_father = $idper5 ";
                                            $person6 = $db->fetchsql($sql6);
                                            $merge = array_merge($merge,$person6);
                                            ?>
                                            <?php foreach ($person6 as $item6): ?>
                                                <?php $idper6 = intval($item6['id']);
                                                $sql7 = "SELECT * FROM person7 WHERE id_father = $idper6 ";
                                                $person7 = $db->fetchsql($sql7);
                                                $merge = array_merge($merge,$person7);
                                                ?>
                                                <?php foreach ($person7 as $item7): ?>
                                                    <?php $idper7= intval($item7['id']);
                                                    $sql8 = "SELECT * FROM person8 WHERE id_father = $idper7 ";
                                                    $person8 = $db->fetchsql($sql8);
                                                    $merge = array_merge($merge,$person8);
                                                    ?>
                                                    <?php foreach ($person8 as $item8): ?>
                                                        <?php $idper8 = intval($item8['id']);
                                                        $sql9 = "SELECT * FROM person9 WHERE id_father = $idper8 ";
                                                        $person9 = $db->fetchsql($sql9);
                                                        $merge = array_merge($merge,$person9);
                                                        ?>
                                                        <?php foreach ($person9 as $item9): ?>
                                                            <?php $idper9 = intval($item9['id']);
                                                            $sql10 = "SELECT * FROM person10 WHERE id_father = $idper9 ";
                                                            $person10 = $db->fetchsql($sql10);
                                                            $merge = array_merge($merge,$person10);
                                                            ?>
                                                        <?php endforeach ?>
                                                    <?php endforeach ?>
                                                <?php endforeach ?>
                                            <?php endforeach ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                <?php endforeach ?>
                            <?php endforeach ?>
                        <?php endforeach ?>
                        <?php  array_multisort (array_column($merge, 'lv'), SORT_ASC, $merge); ?>

                        <?php $stt = 1;foreach ($merge as $item):
                            ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['lv'] ?></td>
                                <td><?php echo $item['name'] ?></td>
                                <td><?php echo $item['birth'] ?></td>
                                <td><?php echo $item['death'] ?></td>
                                <td><?php echo $item['address'] ?></td>
                                <td><?php echo $item['phone'] ?></td>
                                <td><?php echo $item['mail'] ?></td>
                                <td>
                                    <a class="btn btn-xs btn-info"
                                       href="suanguoi.php?id=<?php echo $item['id'] ?>&level=<?php echo $item['lv'] ?>&idtree=<?php echo $id ?>">Sửa</a>
                                </td>
                            </tr>
                            <?php $stt++; endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<?php require_once __DIR__ . "/../../layouts/footer.php" ?>;
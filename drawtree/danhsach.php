<?php
require "dequy.php";
require_once __DIR__ . "/../libraries/database.php";
require_once __DIR__ . "/../libraries/function.php";
$db = new database;
$id = intval(getInput("id"));
$detailtree = $db->fetchID("tree", $id);
$idto = intval($detailtree['idper0']);
$sql0 = "SELECT * FROM person0 WHERE id = $idto";
$person0 = $db->fetchID("person0", $detailtree['idper0']);
$person01 = $db->fetchsql($sql0);
$idper0 = intval($person0['id']);
$sql1 = "SELECT * FROM person1 WHERE id_father = $idper0 ";
$person1 = $db->fetchsql($sql1);
$merge = array_merge($person01, $person1);
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="style.css" rel="stylesheet"/>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $('#menu_wrapper ul div').hide();
            $('#menu_wrapper ul li a').click(function () {
                var tmp = $(this).next('div');

                if ($(tmp).is(':visible')) {
                    $(tmp).hide();
                } else {
                    $(tmp).show();
                }
                return false;
            });
        });
    </script>
</head>
<body>
<h1 align="center"><?php echo $detailtree['name'] ?></h1>
<?php foreach ($person1 as $item1): ?>
    <?php $idper1 = intval($item1['id']);
    $sql2 = "SELECT * FROM person2 WHERE id_father = $idper1 ";
    $person2 = $db->fetchsql($sql2);
    $merge = array_merge($merge, $person2);
    ?>
    <?php foreach ($person2 as $item2): ?>
        <?php $idper2 = intval($item2['id']);
        $sql3 = "SELECT * FROM person3 WHERE id_father = $idper2 ";
        $person3 = $db->fetchsql($sql3);
        $merge = array_merge($merge, $person3);
        ?>
        <?php foreach ($person3 as $item3): ?>
            <?php $idper3 = intval($item3['id']);
            $sql4 = "SELECT * FROM person4 WHERE id_father = $idper3 ";
            $person4 = $db->fetchsql($sql4);
            $merge = array_merge($merge, $person4);
            ?>
            <?php foreach ($person4 as $item4): ?>
                <?php $idper4 = intval($item4['id']);
                $sql5 = "SELECT * FROM person5 WHERE id_father = $idper4 ";
                $person5 = $db->fetchsql($sql5);
                $merge = array_merge($merge, $person5);
                ?>
                <?php foreach ($person5 as $item5): ?>
                    <?php $idper5 = intval($item5['id']);
                    $sql6 = "SELECT * FROM person6 WHERE id_father = $idper5 ";
                    $person6 = $db->fetchsql($sql6);
                    $merge = array_merge($merge, $person6);
                    ?>
                    <?php foreach ($person6 as $item6): ?>
                        <?php $idper6 = intval($item6['id']);
                        $sql7 = "SELECT * FROM person7 WHERE id_father = $idper6 ";
                        $person7 = $db->fetchsql($sql7);
                        $merge = array_merge($merge, $person7);
                        ?>
                        <?php foreach ($person7 as $item7): ?>
                            <?php $idper7 = intval($item7['id']);
                            $sql8 = "SELECT * FROM person8 WHERE id_father = $idper7 ";
                            $person8 = $db->fetchsql($sql8);
                            $merge = array_merge($merge, $person8);
                            ?>
                            <?php foreach ($person8 as $item8): ?>
                                <?php $idper8 = intval($item8['id']);
                                $sql9 = "SELECT * FROM person9 WHERE id_father = $idper8 ";
                                $person9 = $db->fetchsql($sql9);
                                $merge = array_merge($merge, $person9);
                                ?>
                                <?php foreach ($person9 as $item9): ?>
                                    <?php $idper9 = intval($item9['id']);
                                    $sql10 = "SELECT * FROM person10 WHERE id_father = $idper9 ";
                                    $person10 = $db->fetchsql($sql10);
                                    $merge = array_merge($merge, $person10);
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
<?php array_multisort(array_column($merge, 'lv'), SORT_ASC, $merge); ?>

<a class="btn btn-xs btn-info" href="../danhsachcay.php">Quay lại</a>
<br/>
<div class="menu_wrapper" style="background-color: white; border: solid 3px black; width: 150%; height: 550px">
    <?php showMenuLi($merge); ?>
</div>
</body>
</html>
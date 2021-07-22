<?php
$open = "Tree";
require_once __DIR__. "/../../../autoload/autoload.php";

$idtree = intval(getInput("idtree"));
$id = intval(getInput("id"));
$lv = strval(getInput("level"));
$table = 'person'.$lv;
//_debug($id);

$xoanguoi = $db -> fetchID($table, $id);
if(empty($xoanguoi)){
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin("Tree/danhsachxoa.php?id=$idtree");
}
$num = $db ->delete($table, $id);
if($num > 0){
    $_SESSION['success'] = "Dữ liệu đã được xoá thành công";
    redirectAdmin("Tree/danhsachxoa.php?id=$idtree");
}
else{
    $_SESSION['error'] = "Xoá dữ liệu thất bại";
    redirectAdmin("Tree/danhsachxoa.php?id=$idtree");
}
?>
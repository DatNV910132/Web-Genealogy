<?php
$open = "Tree";
require_once __DIR__. "/../../../autoload/autoload.php";


$id = intval(getInput("id"));
//_debug($id);

$suatree = $db -> fetchID("Tree", $id);
if(empty($suatree)){
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin("Tree");
}
$num = $db ->delete("Tree", $id);
$num1 = $db ->delete("person0", $suatree['idper0']);
if($num > 0){
    $_SESSION['success'] = "Dữ liệu đã được xoá thành công";
    redirectAdmin("Tree");
}
else{
    $_SESSION['error'] = "Xoá dữ liệu thất bại";
    redirectAdmin("Tree");
}
?>
<?php
    $open = "baicung";
    require_once __DIR__. "/../../../autoload/autoload.php";


    $id = intval(getInput("id"));
    //_debug($id);

    $suabaicung = $db -> fetchID("baicung", $id);
    if(empty($suabaicung)){
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("baicung");
    }
    $num = $db ->delete("baicung", $id);
    if($num > 0){
        $_SESSION['success'] = "Dữ liệu đã được xoá thành công";
        redirectAdmin("baicung");
    }
    else{
        $_SESSION['error'] = "Xoá dữ liệu thất bại";
        redirectAdmin("baicung");
    }
?>
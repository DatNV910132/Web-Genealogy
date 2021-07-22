<?php
    $open = "user";
    require_once __DIR__. "/../../../autoload/autoload.php";


    $id = intval(getInput("id"));
    //_debug($id);

    $suauser = $db -> fetchID("user", $id);
    if(empty($suauser)){
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("user");
    }
    $num = $db ->delete("user", $id);
    if($num > 0){
        $_SESSION['success'] = "Dữ liệu đã được xoá thành công";
        redirectAdmin("user");
    }
    else{
        $_SESSION['error'] = "Xoá dữ liệu thất bại";
        redirectAdmin("user");
    }
?>
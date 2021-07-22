<?php
function showMenuLi($menus, $id_parent = 0,$lv = 0)
{
    $menu_tmp = array();
 
    foreach ($menus as $key => $item) {
        if ((int) $item['id_father'] == (int) $id_parent && intval($item['lv']) == (int) $lv) {
            $menu_tmp[] = $item;
            unset($menus[$key]);
        }
    }
    $lv = $lv + 1;
    if ($menu_tmp) 
    {
        echo '<ul>';
        foreach ($menu_tmp as $item) 
        {
            echo '<li>';
            echo '<a>' . $item['name']. '</br>' . $item['birth'] . ' - ' . $item['death'] .'</a>';
            showMenuLi($menus, $item['id'],$lv);
            echo '</li>';
        }
        echo '</ul>';
    }
}


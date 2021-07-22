<?php
require_once __DIR__. "/autoload/autoload.php";
$baicung = $db -> fetchAll("baicung");
?>
<?php require_once __DIR__. "/layouts/header.php" ?>
<img src="<?php echo base_url() ?>public/frontend/images/vankhan.png" width="25%" align="right">
<div class="col-md-9 bor">
    <?php foreach ($baicung as $item): ?>
        <h3 class="title-main"><a href="chitietbaicung.php?id=<?php echo $item['id']?>"><?php echo $item['name']?></a> </h3>
    <?php endforeach ?>
</div>
<?php require_once __DIR__. "/layouts/footer.php" ?>;
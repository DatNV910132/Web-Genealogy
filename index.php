<?php
require_once __DIR__ . "/autoload/autoload.php";
$baicung = $db->fetchAll("baicung");
?>
<?php require_once __DIR__ . "/layouts/header.php" ?>
<div class="col-md-9 ">
    <h2>Các bạn thân mến !</h2>
    <p lang="VI"><span style="font-size: 20px;font-family: 'Times New Roman';text-align: center">Bậc tiền nhân từ xưa đã dạy : "Mọi vật tự trời sinh, mọi người đều có Tổ tiên, uống nước phải nhớ nguồn, đó là
        đạo lý cương thường vạn cổ. Đất nước có sử sách, biên cương được củng cố. Nhà có Gia phả lưu giữ phát huy công
        đức Tổ tiên"</span></p>
    <img src="<?php echo base_url() ?>public/frontend/images/index.jpg" width="90%">

    <p lang="VI"><span style="font-size: 20px;font-family: 'Times New Roman';text-align: center">Gia Phả là một trong những thứ quý báu nhất mà tổ tiên ta để lại. Thời gian là thứ đáng sợ nhất, chôn vùi, lấp đi những thứ quý báu ấy.</span>
    </p>
    <p lang="VI"><span style="font-size: 20px;font-family: 'Times New Roman';text-align: center">Bạn đang lo lắng, liệu truyền thống dòng họ, ký ức về tổ tiên lâu ngày bị mai một ?</span>
    </p>
    <p lang="VI"><span style="font-size: 20px;font-family: 'Times New Roman';text-align: center">Bạn là bậc con cháu, rất muốn gìn giữ văn hóa dòng tộc, góp sức xây dựng dựng gia phả, gửi gắm công ơn của những bậc Tiên Tổ tới cháu con trong Họ Tộc ?</span>
    </p>
    <p lang="VI"><span style="font-size: 20px;font-family: 'Times New Roman';text-align: center">Bạn rất muốn biên soạn lại gia phả dòng họ hay đơn giản lập một tấm Phả Đồ để con cháu biết thứ bậc, anh em, họ hàng?</span>
    </p>
    <p lang="VI"><span style="font-size: 20px;font-family: 'Times New Roman';text-align: center">Một đất nước trong giai đoạn không có sử gọi là huyền sử; nhà không có phả gọi là huyền phả.Có gia phả, mọi việc sẽ rõ ràng, chính xác, bền vững, khả năng lưu truyền mạnh mẽ, mau lẹ và đi xa hơn. Người “mất gốc”, không biết mình do ai sinh ra và gốc gác ở đâu, đây là hoàn cảnh đáng thương cô độc và quạnh quẽ. Người có gia phả sẽ tự tin hơn, tự hào về truyền thống tốt đẹp của dòng họ mình để củng cố niềm tin, vững bước đi lên trong mọi tình huống.</span>
    </p>
</div>
<!--<div class="col-md-9 ">-->
<!--    <section class="box-main1">-->
<!--        --><?php //foreach ($baicung as $item): ?>
<!--            <div class="col-md-6 bor" style="margin-top: 30px;padding: 20px; margin-bottom: 20px;">-->
<!--                <a href="chitietbaicung.php?id=--><?php //echo $item['id'] ?><!--"><img-->
<!--                            src="--><?php //echo base_url() ?><!--public/frontend/images/vankhan.png"-->
<!--                            class="" width="100%" height="180"></a>-->
<!--                <a href="chitietbaicung.php?id=--><?php //echo $item['id'] ?><!--">-->
<!--                    <h1 style="margin-top: 10px">--><?php //echo $item['name'] ?><!--</h1></a>-->
<!--            </div>-->
<!--        --><?php //endforeach ?>
<!--    </section>-->
<!--</div>-->
<?php require_once __DIR__ . "/layouts/footer.php" ?>;
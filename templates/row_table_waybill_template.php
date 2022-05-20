<?php
$link = "document_page.php?id=".$id_waybill;
?>
<form action="" method="post">
    <tr>
        <th><?=$id_waybill;?></th>
        <th><?=$operation;?></th>
        <th><?=$date_of_waybill;?></th>
        <th><?=$note;?></th>
        <th><button class="btn btn-secondary" formaction="<?=$link;?>">перейти</button> </a></th>
    </tr>
</form>

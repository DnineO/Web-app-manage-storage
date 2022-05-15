<?php
$link = "admin_client.php?id=".$id_product;
?>
<tr>
    <th><?=$id_product;?></th>
    <th><?=$name_product;?></th>
    <th><?=$form;?></th>
    <th><?=$price;?></th>
    <th><a href=<?=$link?>> перейти </a></th>
</tr>
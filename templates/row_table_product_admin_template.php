<?php
$link = "product_page.php?id=".$id_product;
?>

<form action="" method="post">
    <tr>
        <th><?=$id_product;?></th>
        <th><?=$name_product;?></th>
        <th><?=$form;?></th>
        <th><?=$counter;?></th>
        <th><?=$price;?></th>
        <th><?=$counter*$price;?></th>
        <th><button class="btn btn-secondary" formaction="<?=$link;?>"> перейти </button></th>
        <th><button class="btn btn-secondary" name="delete">удалить</button>
            <input type="hidden" name="id" value="<?=$id_product;?>"></th>
    </tr>
</form>
<?php
$link = "document_admin_page.php?id=".$id_waybill;
$agent = get_agent($id_agent_fk)[0]['surname'];
?>
<form action="" method="post">
    <tr>
        <th><?=$id_waybill;?></th>
        <th><?=$operation;?></th>
        <th><?=$agent?></th>
        <th><?=$date_of_waybill;?></th>
        <th><?=$customer?></th>
        <th><?=$note;?></th>
        <th><button class="btn btn-secondary" formaction="<?=$link;?>">перейти</button></th>
        <th><button class="btn btn-secondary" name="delete">удалить</button>
            <input type="hidden" name="id" value="<?=$id_waybill?>"></th>
    </tr>
</form>

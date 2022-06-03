<?php
$link = "user_admin_page.php?id=".$id_agent;
?>
<form action="" method="post">
    <tr>
        <th><?=$id_agent;?></th>
        <th><?=$surname;?></th>
        <th><?=$firstname;?></th>
        <th><?=$date_birthday;?></th>
        <th><?=$role_personal?></th>
        <th><button class="btn btn-secondary" formaction="<?=$link;?>">перейти</button>
            <input type="hidden" name="id" value="<?=$id_agent;?>"></th>
        <th><button class="btn btn-secondary" name="delete">удалить</button>
            <input type="hidden" name="id" value="<?=$id_agent?>"></th>
    </tr>
</form>
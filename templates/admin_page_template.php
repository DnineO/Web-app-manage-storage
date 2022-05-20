<?php

$user = get_admin($_SESSION['name']);
$surname = $user[0]['surname'];
$firstname = $user[0]['firstname'];
$date_birth = $user[0]['date_birthday'];
$role_personal = $user[0]['role_personal'];


if ((isset($_POST["old"]) or isset($_POST["new"]))){
//    var_dump($_POST);

    $old= $_POST['old'][0];
    $new = $_POST['new'][0];

//    var_dump(get_pass($id));
    if ($old == get_pass($id)){
        change_pass($id,$new);
        alert('Пароль сменен');
    }else{
        alert('Старый пароль введен неверно');
    }
}
?>


<h3>
    Admin profile page - <?=$surname?>
</h3>

<div class="formData">
    <table class="table">
        <tbody>
        <th>
            <tr><td><span class="lead">Фамилия </span>
                    <font size="4" color="#808080"></font></td>
                <td><input class="form-check-input" name="text" value="<?=$surname;?>" disabled style="width:90%;"></td>
            </tr>

            <tr><td><span class="lead">Имя </span>
                    <font size="4" color="#808080"></font></td>
                <td><input class="form-check-input" name="text" value="<?=$firstname;?>" disabled style="width:90%;"></td>
            </tr>

            <tr><td><span class="lead">Дата рождения </span>
                    <font size="4" color="#808080"></font></td>
                <td><input class="form-check-input" type="date" name="text" value="<?=$date_birth;?>" disabled style="width:90%;"></td>
            </tr>

            <tr><td><span class="lead">Роль</span>
                    <font size="4" color="#808080"></font></td>
                <td><input class="form-check-input" name="text" value="<?=$role_personal?>" disabled style="width:90%;"></td>
            </tr>
            <form name="change" action="" method="post">
                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-text">Старый пароль</span>
                            <font size="4" color="#808080"></font>
                            <input type="password" name="old[]" id="old" aria-label="old pass" class="form-control" value="">
                            <input type="password" name="new[]" id="new" aria-label="new pass" class="form-control" value="">
                            <span class="input-group-text">Новый пароль</span>
                        </div>
                    </td>
                    <td>
                        <input class="btn btn-secondary" type="submit" value="Сменить">
                    </td>
                </tr>
            </form>

        </th>
        </tbody>
    </table>


</div>
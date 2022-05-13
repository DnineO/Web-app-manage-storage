<?php

$user = get_admin($_SESSION['name']);
$surname = $user[0]['surname'];
$firstname = $user[0]['firstname'];
$date_birth = $user[0]['date_birthday'];
$role_personal = $user[0]['role_personal'];

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
        </th>
        </tbody>
    </table>


</div>
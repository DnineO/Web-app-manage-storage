<?php

//var_dump($_POST);
//var_dump($id_agent);

if (isset($_POST['save'])){
    $id_agent = $_POST['id'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $date = $_POST['date_birth'];
    $pass = $_POST['pass'];
    $role = $_POST['role'][0];

    update_agent($id_agent,$surname,$firstname,$date,$role,$pass);
    alert('Сохранено');
}
if (isset($_POST['id'])) {
    $id_agent = (int)$_POST['id'];
    $agent = get_agent($id_agent);

    $surname = $agent[0]['surname'];
    $firstname = $agent[0]['firstname'];
    $date_birth = $agent[0]['date_birthday'];
    $role = $agent[0]['role_personal'];
    $pass = $agent[0]['pass'];
}
?>

<div>
    <h3> User profile page <?=$surname?></h3>
</div>


<form name="change" action="" method="post">
    <div class="formData">
        <table class="table">
            <tbody>
            <th>
                <tr><td><span class="lead">Фамилия </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input name="surname" class="form-check-input" value="<?=$surname;?>"  style="width:90%;"></td>
                </tr>

                <tr><td><span class="lead">Имя </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input name="firstname" class="form-check-input" value="<?=$firstname;?>"  style="width:90%;"></td>
                </tr>

                <tr><td><span class="lead">Дата рождения </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input name="date_birth" class="form-check-input" type="date" value="<?=$date_birth;?>"  style="width:90%;"></td>
                </tr>

                <tr><td><span class="lead">Роль</span>
                        <font size="4" color="#808080"></font></td>
                    <td>
<!--                        <input class="form-check-input" value="--><?//=$role?><!--" style="width:90%;">-->

                    <select type="text" name="role[]" class="form-check-input" style="width:90%;">
                        <option selected value="user">User</option>
                        <option value="admin">Admin</option>
                    </td>
                </tr>
                <tr>

                    <td>
                        <span class="lead">Пароль</span>
                        <font size="4" color="#808080"></font>
                    </td>
                    <td>
                        <input type="text" name="pass" class="form-check-input" value="<?=$pass?>" style="width:90%;">
                    </td>
                </tr>
            </th>
            </tbody>
        </table>
        <div class="dropdown">
            <button class="btn btn-secondary" name="save" style="">Сохранить</button>
            <input type="hidden" name="id" value="<?=$id_agent?>">
        </div>
    </div>
</form>

<div class="dropdown" style="padding-top: 0.1in">
    <form action="/admins/users_admin_page.php" method="post">
        <button class="btn btn-secondary" name="delete" style="left: 0.1in">Удалить</button>
        <input type="hidden" name="id" value="<?=$id_agent?>">
    </form>
</div>
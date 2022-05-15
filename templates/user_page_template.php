<?php
$user = get_admin($_SESSION['name']);
$surname = $user[0]['surname'];
$firstname = $user[0]['firstname'];
$date_birth = $user[0]['date_birthday'];
$role_personal = $user[0]['role_personal'];
?>


<div>
    <h1> User profile page <?=$surname?></h1>
</div>

<!--TODO: передачу данных, функционально можно разместить здесь кнопки, подумать-->

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


<div class="btn-toolbar" >
    <p>
        <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
            Показать таблицу документов
        </button>
    </p>

    <div class="collapse" id="collapse1">
        <div class="card card-body">
            render table documents.

            <?php
            //TODO: таблицы (есть 1)
            $table = "";
            $position = get_products();

            foreach ($position as $product){
                $table = $table.render_template_row_product($product);
            }

            $table = render_template_table_product($table);
            showPageIfLogged("Table product", $table);
            ?>

        </div>
    </div>
</div>
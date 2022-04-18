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
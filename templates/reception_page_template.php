<?php

//echo('empty reception page ');

var_dump($_POST);

?>


<div>
    <h1>Оформление</h1>
    <form name="addproduct" action="" method="post">
        <div class="input-group mb-3" style="width: 25%">
            <label class="input-group-text" for="select0">Операция</label>
            <select name="select0[]" class="form-select" id="select2">
                <option selected disabled>Выберите</option>
                <option value="Приход">Приход</option>
                <option value="Отгрузка">Отгрузка</option>
            </select>
        </div>
        <div class="btn-toolbar">
            <div>
                <p>
                    <button class="btn btn-secondary" type="submit">Продолжить</button>
                </p>
            </div>
        </div>
    </form>
</div>
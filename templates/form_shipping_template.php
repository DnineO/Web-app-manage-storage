

<form action="" method="post">
    <div style="width: 40%">
        <label class="input-group-text mb-auto" for="select0">Отгрузка</label>
    </div>
    <br>
    <div style="width: 40%">
        <div class="input-group mb-auto">
            <label class="input-group-text" for="select1">Для кого</label>
            <input name="count" type="text" class="form-control" placeholder="введите фамилию" aria-label="count" aria-describedby="addon-wrapping">
        </div>
    </div>
    <br>
    <div style="width: 40%">
        <div class="input-group mb-auto">
            <label class="input-group-text" for="select2">Наименование</label>
            <select name="select2[]" class="form-select" id="select2">
                <option>Выберите</option>
                <?php
                $select = '';
                $position = get_products();
                $i = 0;
                $select = $select.render_template_select_product($position[$i]);
                $perem = $position[$i]['name_product'];
                $max = get_max_id_product()[0]['id_product'] - 1;

                foreach ($position as $item){
                    $i = $i + 1;
                    if ($i <= $max){
                        if ($perem != $item['name_product']){
                            $select = $select.render_template_select_product($item);
                            $perem = $position[$i]['name_product'];
                        }
                    }
                }

                render_page("Select product",$select);
                ?>
            </select>
        </div>
    </div>
    <br>
    <div style="width: 40%">
        <div class="input-group mb-auto">
            <label class="input-group-text" for="select3">Форма</label>
            <select name="select3[]" class="form-select" id="select3">
                <option selected disabled>Выберите</option>
                <option value="круглый">Круглый</option>
                <option value="прямоугольный">Прямоугольный</option>
            </select>
        </div>
    </div>
    <br>
    <div style="width: 40%">
        <div class="input-group mb-auto">
            <label class="input-group-text" for="select4">Количество</label>
            <input name="count" type="text" class="form-control" placeholder="введите количество" aria-label="count" aria-describedby="addon-wrapping">
        </div>
    </div>
    <br>
    <div class="btn-toolbar">
        <div>
            <p>
                <button class="btn btn-secondary" type="submit">Оформить</button>
            </p>
        </div>
    </div>

</form>
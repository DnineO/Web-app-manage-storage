<!-- от кого, что , сколько, документ -->

<form action="" method="post">
    <div style="width: 40%">
        <label class="input-group-text mb-auto disabled" for="select0">Приход</label>
    </div>
    <br>
    <div style="width: 40%">
        <div class="input-group mb-auto">
            <label class="input-group-text" for="select1">От кого</label>
            <select required name="select1[]" class="form-select" id="select1">
                <option selected disabled value="non">Выберите</option>
                <?php
                $select = '';
                $position = get_providers();
//                var_dump($position);
                foreach ($position as $provider){
                    $select = $select.render_template_select_provider($provider);
                }

                render_page("Select providers",$select );
                ?>
            </select>
        </div>
    </div>
<br>
    <div style="width: 40%">
        <div class="input-group mb-auto">
            <label class="input-group-text" for="select2">Наименование</label>
            <select required name="select2[]" class="form-select" id="select2">
                <option selected disabled value="non">Выберите</option>
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
            <label class="input-group-text" for="select2">Форма</label>
            <select required name="select3[]" class="form-select" id="select2">
                <option selected disabled value="non">Выберите</option>
                <option value="круглый">Круглый</option>
                <option value="прямоугольный">Прямоугольный</option>
            </select>
        </div>
    </div>
    <br>
    <div style="width: 40%">
        <div class="input-group mb-auto">
            <label class="input-group-text" for="select4">Дата</label>
            <input required name="date" type="date" class="form-control" placeholder="введите дату" aria-label="count" aria-describedby="addon-wrapping">
        </div>
    </div>
    <br>
    <div style="width: 40%">
        <div class="input-group mb-auto">
            <label class="input-group-text" for="select4">Количество</label>
            <input required name="count" type="number" class="form-control" placeholder="введите количество" aria-label="count" aria-describedby="addon-wrapping">
        </div>
    </div>
    <br>
    <div class="btn-toolbar">
        <div>
            <p>
                <button class="btn btn-secondary" formaction="/templates/nakladnaya_template.php?id=<?=get_max_id_document()[0]['id_waybill'] + 1?>" type="submit">Оформить</button>
                <input type="hidden" name="reception" value="приход">
            </p>
        </div>
</form>
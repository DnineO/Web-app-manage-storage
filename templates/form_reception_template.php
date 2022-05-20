<!-- от кого, что , сколько, документ -->

<form action="" method="post">
    <div style="width: 40%">
        <div class="input-group mb-auto">
            <label class="input-group-text" for="select1">От кого</label>
            <select name="select1[]" class="form-select" id="select1">
                <option selected disabled>Выберите</option>
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
            <select name="select2[]" class="form-select" id="select2">
                <option selected disabled>Выберите</option>
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
        <div class="input-group mb-3">
            <label class="input-group-text" for="select2">Форма</label>
            <select name="select2[]" class="form-select" id="select2">
                <option selected disabled>Выберите</option>
                <option value="круглый">Круглый</option>
                <option value="прямоугольный">Прямоугольный</option>
    </div>

</form>
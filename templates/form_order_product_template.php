
<div>
    <h1>Оформление</h1>
    <form name="addproduct" action="" method="post">
        <table class="tab-content">
            <th>
                <tr>
                    <td>
                        <div class="input-group mb-3" style="width: 90%">
                            <label class="input-group-text" for="select1">Наименование</label>
                            <select name="select1[]" class="form-select" id="select1">
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
                                <!--TODO:дополнить ///// либо  изменить велосипед (необязательно брать из бд, но обязателен полный перечень)-->
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group mb-3" style="width: 90%">
                            <label class="input-group-text" for="select2">Форма</label>
                            <select name="select2[]" class="form-select" id="select2">
                                <option selected disabled>Выберите</option>
                                <option value="круглый">Круглый</option>
                                <option value="прямоугольный">Прямоугольный</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="btn-toolbar">
                            <div>
                                <p>
                                    <button class="btn btn-secondary" type="submit">Продолжить</button>
                                </p>
                            </div>
                    </td>
                </tr>
            </th>
        </table>
    </form>
</div>
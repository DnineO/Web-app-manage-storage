<div class="dropdown">
    <button class="btn btn-secondary" onclick="location.href = 'order_product_page.php'"> Оформление товара/услуги  </button>
    <button class="btn btn-secondary" onclick="location.href= 'reception_page.php'"> Приход/Отгрузка </button>
    <input type="button" class="btn btn-secondary" value="Резервирование">
    <button class="btn btn-secondary" onclick="location.href='inventory_page.php'"> Инвентаризация </button>
<!--    <input type="button" class="btn btn-secondary" value="Счет ИП">-->
    <button class="btn btn-secondary" onclick="location.href='/templates/otchet_teplate.html'">Распечатать счет</button>

</div>

<br>


<div class="btn-toolbar">
    <div>
        <p>
            <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                Показать таблицу товаров
            </button>
        </p>

        <div class="collapse" id="collapse1">
            <div class="card card-body">
<!--                render table product.-->

                <?php
                $table = "";
                $position = get_products();

                foreach ($position as $product){
                    $table = $table.render_template_row_product($product);
                }

                $table = render_template_table_product($table);
                render_page("Table product", $table);
                ?>

            </div>
        </div>
        <br>
    </div>
</div>
<div class="btn-toolbar">
    <div>
        <p>
            <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                Показать таблицу номенклатуры
            </a>
        </p>

        <div class="collapse" id="collapse2">
            <div class="card card-body">
<!--                render table waybill.-->
                <?php
                $table = "";
                $position = get_waybills();

                foreach ($position as $doc){
                    $table = $table.render_template_row_waybill($doc);
                }

                $table = render_template_table_waybill($table);
                render_page("Table product", $table);
                ?>
            </div>
        </div>
    </div>
</div>

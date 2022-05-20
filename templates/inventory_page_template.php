<form action="" method="post">
    <div>
        <?php
        $table = "";
        $position = get_products();

        foreach ($position as $product){
            $table = $table.render_template_row_inventory_product($product);
        }

        $table = render_template_table_inventory_product($table);
        render_page("Table product", $table);
        ?>
    </div>

    <div style="position: fixed; bottom:10px; width: 200px; margin-left: 80%;">
        <button class="btn btn-secondary" type="submit">Подтвердить</button>
    </div>
</form>
<!--TODO: переход на страницу документирования -->
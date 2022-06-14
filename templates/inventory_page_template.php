<?php
//print_r($_POST);
?>
<form action="" method="post">
    <div>
        <?php
        $table = "";
        $arr = array();

        $position = get_products();
        foreach ($position as $product){
                $table = $table.render_template_row_inventory_product($product);
        }

        $table = render_template_table_inventory_product($table);
        render_page("Table product", $table);
        ?>
    </div>

    <div style="position: fixed; bottom:10px; width: 200px; margin-left: 80%;">
        <button class="btn btn-secondary" formaction="/templates/inventory_document_template.php" type="submit">Подтвердить</button>

    </div>
</form>
<!--TODO: переход на страницу документирования (есть) -->
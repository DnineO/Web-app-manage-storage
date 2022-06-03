<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__, 1)."/back/query.php";
require_once dirname(__DIR__, 1)."/back/templates.php";
require_once dirname(__DIR__, 1)."/back/functions.php";


?>
<!--<h1>Page products</h1>-->
<div class="dropdown">
    <p>
        <button class="btn btn-secondary" onclick="location.href='product_add_page.php'">Добавить изделие</button>
    </p>
</div>
<div class="card card-body">
    <!--                render table product.-->
    <?php
    $table = "";
    $position = get_products();

    foreach ($position as $product){
        $table = $table.render_template_row_admin_product($product);
    }

    $table = render_template_table_admin_product($table);
    render_page("Table product", $table);
    ?>

</div>

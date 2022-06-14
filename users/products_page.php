<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__, 1)."/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";


$table = "";
$position = get_products();

foreach ($position as $product){
    $table = $table.render_template_row_product($product);
}

$table = render_template_table_product($table);
render_page("Table product", $table);

?>
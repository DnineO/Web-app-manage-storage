<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__, 1)."/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";


$table = "";
$position = get_waybills();

foreach ($position as $doc){
    $table = $table.render_template_row_waybill($doc);
}

$table = render_template_table_waybill($table);
render_page("Table product", $table);

?>
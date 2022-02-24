<?php


require_once dirname(__DIR__, 1)."/back/query.php";
require_once dirname(__DIR__, 1)."/back/templates.php";

//alert('Привет');

render_page("Main-page", render_template_main_page());

?>
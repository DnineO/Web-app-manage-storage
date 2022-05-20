<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require_once dirname(__DIR__, 1)."/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";

showPageIfLogged("Product-page", render_template_document_page());

?>
<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__, 1)."/back/query.php";
require_once dirname(__DIR__, 1)."/back/templates.php";
require_once dirname(__DIR__, 1)."/back/functions.php";

if (isset($_POST['delete'])){
//    var_dump($_POST);
    delete_waybill($_POST['id']);
    alert('Документ №'.$_POST['id'].' удален');
}
showPageIfLogged("Users page",render_template_documents_admin_page());

?>
<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__, 1)."/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";

showPageIfLogged("Reception-shipping page", render_template_reception_page());

//var_dump($_POST);

if (isset($_POST['select1'])){
    if ($_POST['select1'][0] == "Приход"){
    render_page("Reception", render_template_reception_form());
    }else{

    }
}

?>
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

    switch ($_POST['select1'][0]) {
        case "Приход":
            showPageIfLogged("Reception", render_template_reception_form());
            break;
        case "Отгрузка":
            showPageIfLogged("Shipping", render_template_shipping_form());
            break;
    }
}
//TODO:переход после операции на оформление документа
?>
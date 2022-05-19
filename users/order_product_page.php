<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require_once dirname(__DIR__, 1). "/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";


showPageIfLogged("Order", render_template_order_product_page());


if (isset($_POST["select2"]) and isset($_POST["select1"])) {
//    var_dump($_POST);

    if ($_POST['select1'][0] == "Адаптер"){
        if ($_POST['select2'][0] == "круглый"){
            render_page('Адаптер круг.',render_template_adapter_circle());
        }
        if ($_POST['select2'][0] == "прямоугольный"){
            showPageIfLogged('Адаптер прямоуг.',render_template_adapter_cube());
        }
    }
    if ($_POST['select1'][0] == "Воздуховод"){
        if ($_POST['select2'][0] == "круглый"){
            render_page('Адаптер круг.',render_template_vozduhovod_circle());
        }
        if ($_POST['select2'][0] == "прямоугольный"){
            showPageIfLogged('Адаптер прямоуг.',render_template_vozduhovod_cube());
        }
    }
    if ($_POST['select1'][0] == "Врезка"){
        if ($_POST['select2'][0] == "круглый"){
            render_page('Адаптер круг.',render_template_vrezka_circle());
        }
        if ($_POST['select2'][0] == "прямоугольный"){
            showPageIfLogged('Адаптер прямоуг.',render_template_vrezka_cube());
        }
    }

}

?>
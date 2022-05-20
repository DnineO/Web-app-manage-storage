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
//TODO: переход на страницу отгрузки,документации
    //TODO: доделать формы изделий
    switch ($_POST['select1'][0]){
        case "Адаптер":
            switch ($_POST['select2'][0]){
                case "круглый":
                    showPageIfLogged('Адаптер круг.', render_template_adapter_circle());
                    break;
                case "прямоугольный":
                    showPageIfLogged('Адаптер прямоуг.', render_template_adapter_cube());
                    break;
            }
        case "Воздуховод":
            switch ($_POST['select2'][0]){
                case "круглый":
                    showPageIfLogged('Адаптер круг.', render_template_vozduhovod_circle());
                    break;
                case "прямоугольный":
                    showPageIfLogged('Адаптер прямоуг.', render_template_vozduhovod_cube());
                    break;
            }
        case "Врезка":
            switch ($_POST['select2'][0]){
                case "круглый":
                    showPageIfLogged('Адаптер прямоуг.',render_template_vrezka_circle());
                    break;
                case "прямоугольный":
                    showPageIfLogged('Адаптер прямоуг.',render_template_vrezka_cube());
                    break;
            }

    }


}

?>
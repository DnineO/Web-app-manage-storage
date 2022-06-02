<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require_once dirname(__DIR__, 1). "/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";


date_default_timezone_set('UTC');
$date = date('j.m.Y');

$surname = $_SESSION['name'];
$agent = get_admin($surname)[0]['id_agent'];

//$str = "";

function second_note($st){
    if (isset($_POST['count_order']) and !empty($_POST['count_order'][0])){
        $st = get_waybill(get_max_id_document()[0]['id_waybill'])[0]['note'];
//        var_dump($st);
        if (isset($_POST['D']) and !empty($_POST['D'])) {
            $st = $st." Ø".$_POST['D'];
        }
        if (isset($_POST['L']) and !empty($_POST['L'])){
            $st = $st." L".$_POST['L'];
        }
        if (isset($_POST['A']) and !empty($_POST['A'])){
            $st = $st." A".$_POST['A'];
        }
        if (isset($_POST['B']) and !empty($_POST['B'])){
            $st = $st." B".$_POST['B'];
        }
        if (isset($_POST['C']) and !empty($_POST['C'])){
            $st = $st." C".$_POST['C'];
        }
        if (isset($_POST['count_order']) and !empty($_POST['count_order'][0])){
            $st = $st."," . $_POST['count_order']." шт.;";
        }
        update_waybill($st);
    }
}


if (isset($_POST['add'])){
    $flag = 1;
}else{
    $flag = 0;
}


if (isset($_POST["select2"]) and isset($_POST["select1"])){
    if ($flag == 1){
        $str = get_waybill(get_max_id_document()[0]['id_waybill'])[0]['note'];
        $select = $_POST['select1'][0] . " " . $_POST['select2'][0];
        $str = $str.$select;
        update_waybill($str);
    }else{
        $customer = $_POST['customer'];
        $select = $_POST['select1'][0] . " " . $_POST['select2'][0];
        push_waybill($date,$select,$agent,$customer);
    }

//TODO: переход на страницу отгрузки,документации
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
            break;
        case "Воздуховод":
            switch ($_POST['select2'][0]){
                case "круглый":
                    showPageIfLogged('', render_template_vozduhovod_circle());
                    break;
                case "прямоугольный":
                    showPageIfLogged('', render_template_vozduhovod_cube());
                    break;
            }
            break;
        case "Врезка":
            switch ($_POST['select2'][0]){
                case "круглый":
                    showPageIfLogged('',render_template_vrezka_circle());
                    break;
                case "прямоугольный":
                    showPageIfLogged('',render_template_vrezka_cube());
                    break;
            }
            break;
    }
}else{
    showPageIfLogged("Order", render_template_order_product_page());

    if (isset($_POST['add'])) {
        $str = get_waybill(get_max_id_document()[0]['id_waybill'])[0]['note'];
        second_note($str);
    }

}

// TODO: if добавить то просто update, если оформить то конец ( не готово)

?>
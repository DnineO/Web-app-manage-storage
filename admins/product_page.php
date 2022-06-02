<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require_once dirname(__DIR__, 1)."/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";

//showPageIfLogged("Product-page", render_template_product_page());

if (isset($_POST['count']) or isset($_POST['price'])){
//    var_dump($_POST);

    $id_product = $_POST['id_product'];
    $counter = $_POST['count'];
    $price = $_POST['price'];

    update_product($id_product,$counter,$price);
    showPageIfLogged("Product-page", render_template_product_page());
    alert('Сохранено успешно');
}else{
    showPageIfLogged("Product-page", render_template_product_page());
}

?>
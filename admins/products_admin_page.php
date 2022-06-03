<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__, 1)."/back/query.php";
require_once dirname(__DIR__, 1)."/back/templates.php";
require_once dirname(__DIR__, 1)."/back/functions.php";

//var_dump($_POST);

if (isset($_POST['delete'])){
    delete_product($_POST['id']);
    alert('Изделие №'.$_POST['id'].' удалено');
}

if (isset($_POST['add_product'])){
    $name = $_POST['name'];
    $form = $_POST['form'][0];
    $count = $_POST['count'];
    $price = $_POST['price'];

    push_product($name,$form,$count,$price);
    alert('Изделие добавлено под номером '.$_POST['id']);
}

showPageIfLogged("Products page",render_template_products_admin_page());

?>


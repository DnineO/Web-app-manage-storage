<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__, 1)."/back/query.php";
require_once dirname(__DIR__, 1)."/back/templates.php";
require_once dirname(__DIR__, 1)."/back/functions.php";

//var_dump($_POST);

if (isset($_POST['delete'])){
    delete_agent($_POST['id']);
    alert('Пользователь №'.$_POST['id'].' удален');
}

if (isset($_POST['add_user'])){
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $date = $_POST['date_birth'];
    $role = $_POST['role'][0];
    $pass = $_POST['pass'];
    push_agent($surname,$firstname,$date,$role,$pass);
    alert('Добавление успешно');
}

showPageIfLogged("Users page",render_template_users_admin_page());

?>
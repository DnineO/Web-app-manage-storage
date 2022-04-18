<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__, 1)."/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";


//TODO: сделать рендер страницы пользователя(готово), сверстать страницу
if (isset($_SESSION['name'])) {

    $user = get_admin($_SESSION['name']);
//    print_r($user);

    $surname = $user[0]['surname'];
    $firstname = $user[0]['firstname'];
    $date_birth = $user[0]['date_birthday'];
    $role_personal = $user[0]['role_personal'];
    showPageIfLogged('User page',render_template_user_page($user[0]));
}
?>

<!--работает-->

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

    showPageIfLogged('User page',render_template_user_page($user[0]));
}
?>

<!--работает-->

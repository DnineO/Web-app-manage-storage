<?php


require_once dirname(__DIR__, 1)."/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";

//TODO: сделать рендер страницы пользователя(готово), сверстать страницу
showPageIfLogged('User page',render_template_user_page());
?>

<!--работает-->

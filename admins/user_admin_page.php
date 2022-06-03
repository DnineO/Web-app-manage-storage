<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__, 1)."/back/query.php";
require_once dirname(__DIR__, 1)."/back/templates.php";
require_once dirname(__DIR__, 1)."/back/functions.php";


showPageIfLogged('User page',render_template_user_admin_page());

?>

<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__, 1)."/back/query.php";
require_once dirname(__DIR__, 1)."/back/templates.php";
require_once dirname(__DIR__, 1)."/back/functions.php";

if (isset($_SESSION['name'])) {

    $user = get_admin($_SESSION['name']);

    showPageIfLogged('Admin page', render_template_admin_page($user[0]));
}
?>
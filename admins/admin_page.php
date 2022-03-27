<?php

require_once dirname(__DIR__, 1)."/back/query.php";
require_once dirname(__DIR__, 1)."/back/templates.php";
require_once dirname(__DIR__, 1)."/back/functions.php";

$surname = get_admin($_SESSION['name']);
print_r($surname);
showPageIfLogged('Admin page',render_template_admin_page($surname));

?>
<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

require_once dirname(__DIR__,1)."/back/query.php";
require_once dirname(__DIR__,1)."/back/templates.php";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?=$title?> </title>

    <!-- core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/starter-template.css" rel="stylesheet">
</head>
<body>


<?=$content?>


<script src="../js/print.js"></script>
<script src="../js/bootstrap.bundle.js"></script>

</body>
</html><?php

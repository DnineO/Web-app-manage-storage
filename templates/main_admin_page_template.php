<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$surname = $_SESSION['name'];


?>



<h3>
    Main admin page - <?=$surname?>
</h3>
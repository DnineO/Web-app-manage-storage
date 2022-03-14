<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$surname = $_SESSION['name'];


?>


<h3>
    Admin profile page - <?=$surname?>
</h3>
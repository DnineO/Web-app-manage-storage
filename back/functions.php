<?php

// проверяет авторизован ли пользователь
function showPageIfLogged($title,$content){
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if (isset($_SESSION['name'])){
        render_page($title,$content);
    }
    else
    {
        render_page($title,"Вы не авторизованы");
    }
}

// alert
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

// clear str
function clear($str){
    $str = "";
}

?>
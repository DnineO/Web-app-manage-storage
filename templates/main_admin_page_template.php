<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$surname = $_SESSION['name'];


?>


<div class="dropdown">
    <p>
        <button class="btn btn-secondary" onclick="location.href = 'users_admin_page.php'"> Пользователи  </button>
        <button class="btn btn-secondary" onclick="location.href= ''"> Товары </button>
        <button class="btn btn-secondary" onclick="location.href=''"> Документы </button>
    </p>
</div>
<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$surname = $_SESSION['name'];

?>

<div class="dropdown">
    <p>
        <button class="btn btn-secondary" onclick="location.href = 'users_admin_page.php'"> Пользователи  </button>
        <button class="btn btn-secondary" onclick="location.href= 'products_admin_page.php'"> Товары </button>
        <button class="btn btn-secondary" onclick="location.href='documents_admin_page.php'"> Документы </button>
<!--        <button class="btn btn-secondary" onclick="location.href='providers_admin_page.php'"> Поставщики </button>-->
    </p>
</div>
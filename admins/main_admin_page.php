<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__, 1)."/back/query.php";
require_once dirname(__DIR__, 1)."/back/templates.php";
require_once dirname(__DIR__, 1)."/back/functions.php";




showPageIfLogged('Main-page admin', render_template_main_admin_page());

?>


<!--<div class="enter__wrong"><font color="#ff0000"> Заполните все поля </font></div>-->

<!--<div>-->
<!--<table border="1" cellspacing="2"  cellpadding="5" width="95%">-->
<!--    <tr>-->
<!--        <th>Наименование</th>-->
<!--        <th>Форма</th>-->
<!--        <th>Размер</th>-->
<!--        <th></th>-->
<!--        <th>Цена</th>-->
<!--        <th>кол-во</th>-->
<!--    </tr>-->
<!--    <tr><td>Зонт</td><td>круглый</td><td>100⌀</td><td></td><td>350 руб.</td><td>2</td></tr>-->
<!--    <tr><td>Хомут</td><td>подвесной</td><td>50⌀</td><td></td><td>85 руб.</td><td>4</td></tr>-->
<!--    <tr><td>Ниппель</td><td></td><td>100⌀</td><td></td><td>85 руб.</td><td>3</td></tr>-->
<!--</table>-->
<!---->
<!--<br>-->
<!---->
<!--<input type="button" class="button" value="Оформить">-->
<!--<input type="button" class="button" value="Добавить">-->
<!--<input type="button" class="button" value="Изменить">-->
<!--</div>-->
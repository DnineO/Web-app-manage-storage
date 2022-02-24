<?php

    if (isset($_GET['error'])) {
    if ($_GET['error'] == "reg error")
    {
    ?>

 <div class="enter__wrong"><font color="#ff0000"> Неверный логин или пароль </font></div>

 <?php
      }
   }
 ?>

     <form method="post" action="../back/log-in.php">
        <h2> <span class="lead">Логин</span></h2> <input name="name" type="text">
        <h2><span class="lead">Пароль</span></h2> <input name="password" type="password">
         <br><br>
        <input type="submit" value="Вход" >
     </form>


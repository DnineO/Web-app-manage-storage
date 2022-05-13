
<div class="dropdown">
<!--    <tr>-->
        <input type="button" class="btn btn-secondary" value="Оформление товара/услуги" onclick="">
        <input type="button" class="btn btn-secondary" value="Отчет ИП">
        <input type="button" class="btn btn-secondary" value="Прием/Отгрузка">
        <input type="button" class="btn btn-secondary" value="Резервирование">
        <input type="button" class="btn btn-secondary" value="Инвентаризация">
        <input type="button" class="btn btn-secondary" value="Счет ИП">
<!--    </tr>-->
</div>

<br>

<div class="btn-toolbar" >
    <p>
        <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
            Показать таблицу товаров
        </a>
    </p>

    <div class="collapse" id="collapse1">
        <div class="card card-body">
            render table product.
            <?php
            //TODO: таблицы
            ?>
        </div>
    </div>
</div>

<!--    список товаров мб ещё что то (додумать)-->

<div class="btn-toolbar" >
    <p>
        <a class="btn btn-secondary" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
            Показать таблицу номенклатуры
        </a>
    </p>

    <div class="collapse" id="collapse2">
        <div class="card card-body">
            render table waybill.
            <?php

            ?>
        </div>
    </div>
</div>

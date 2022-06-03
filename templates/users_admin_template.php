<!--<h1>hello</h1>-->

<div class="dropdown">
    <p>
        <button class="btn btn-secondary" onclick="location.href='user_add_page.php'">Добавить пользователя</button>
    </p>
</div>


<div class="card card-body">
<?php

$table = "";
$position = get_users();

foreach ($position as $product){
    $table = $table.render_template_row_users($product);
}

$table = render_template_table_users($table);
render_page("Table users", $table);

?>
</div>


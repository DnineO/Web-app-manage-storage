<!--<h1>Documents page</h1>-->

<div class="card card-body">
    <!--                render table waybill.-->
    <?php
    $table = "";
    $position = get_waybills();

    foreach ($position as $doc){
        $table = $table.render_template_row_admin_waybill($doc);
    }

    $table = render_template_table_admin_waybill($table);
    render_page("Table product", $table);
    ?>
</div>
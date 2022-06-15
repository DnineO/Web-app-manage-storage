<div id="product-block" class="block-with-info hide" style="width: 100%">
    <h3>Инвентаризация</h3>
    <div class="menu-admin__table">
        <table id="my-table" class="table table-sm table-bordered">
            <thead class="table-light">
            <tr>
                <th>№</th>
                <th>Наименование</th>
                <th>форма</th>
                <th>кол-во</th>
                <th>актуальное кол-во</th>
            </tr>
            </thead>
            <tbody class="table-hover">
            <?=$table;?>
            </tbody>
            <tfoot>
            <tr>
                <th>Итог</th>
                <th></th>
                <th></th>
                <th><?=get_sum_count_product()[0]['sum'];?></th>
                <th><?php  ?></th>
                <th></th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
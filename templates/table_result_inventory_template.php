<div id="product-block" class="" style="width: 100%">
<!--    <h3>Список изделий</h3>-->
    <div class="">
        <table id="my-table" class="">
            <thead class="">
            <tr>
                <td style="border: 1px solid #000000; width: 5%"><p class="western" align="">№</p></td>
                <td style="border: 1px solid #000000; width: 15%;"><p class="western" align="center">Наименование</p></td>
                <td style="border: 1px solid #000000; width: 15%;"><p class="western" align="center">форма</p></td>
                <td style="border: 1px solid #000000; width: 10%;"><p class="western" align="center">кол-во</p></td>
                <td style="border: 1px solid #000000; width: 20%;"><p class="western" align="center">актуальное кол-во</p></td>
                <td style="border: 1px solid #000000; width: 20%"><p class="western" align="center"> разница</p></td>
            </tr>
            </thead>
            <tbody class="">
            <?=$table;?>
            </tbody>
            <tfoot>
            <tr style="border: 1px solid #000000;">
                <th>Итог</th>
                <td></td>
                <td></td>
                <th style="border: 1px solid #000000;"><p class="western" align="right"> <?=get_sum_count_product()[0]['sum'];?></p></th>
                <th style="border: 1px solid #000000;"><p class="western" align="right"><?=sum_count($_POST['new_count'])?></p></th>
                <th style="border: 1px solid #000000;"><p class="western" align="right"><?=get_sum_count_product()[0]['sum'] - sum_count($_POST['new_count'])?></p></th>
            </tr>
            <?php
            //TODO: подводить итог
            ?>
            </tfoot>
        </table>
    </div>
</div>

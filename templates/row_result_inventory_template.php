<form action="" method="post">
    <tr>
        <td style="border: 1px solid #000000;"><p class="western"><?=$id_product;?></td>
        <td style="border: 1px solid #000000;"><p class="western"><?=$name_product;?></td>
        <td style="border: 1px solid #000000;"><p class="western"><?=$form;?></td>
        <td style="border: 1px solid #000000;"><p class="western" align="right"><?=$counter;?></td>
        <td style="border: 1px solid #000000;"><p class="western" align="right"><?=$_POST['new_count'][$id_product]?></td>
        <td style="border: 1px solid #000000;"><p class="western" align="right"><?=$counter - $_POST['new_count'][$id_product]?></td>
    </tr>
</form>

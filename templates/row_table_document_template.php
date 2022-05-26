<?php

//var_dump($score);
//echo ('123');

//$number;
//$text_product = "что - то с чем то ";
//$count = 3;
//$price = 1;
?>

<form action="" method="post">
<tr>
    <td width="27" height="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1px solid #000000; padding: 0in 0.08in;position: relative; top: 0in; left: 0.3in;">
        <p lang="ru-RU" class="western" align="center">
            <font size="2" style="font-size: 11pt"><?=$id_product;?></font>
        </p>
    </td>
    <td width="322" style="border: 1px solid #000000; padding: 0in 0.08in; position: relative; top: 0in; left: 0.3in;">
        <p lang="ru-RU" class="western" align="left">
            <font size="2" style="font-size: 11pt"><?=$name_product;?></font>
        </p>
    </td>
    <td width="58" style="border: 1px solid #000000; padding: 0in 0.08in; position: relative; top: 0in; left: 0.3in;">
        <p lang="ru-RU" class="western" align="right">
            <font size="2" style="font-size: 11pt"><?=$counter;?></font>
        </p>
    </td>
    <td width="34" style="border: 1px solid #000000; padding: 0in 0.08in; position: relative; top: 0in; left: 0.3in;">
        <p lang="ru-RU" class="western" align="left">
            <font size="2" style="font-size: 11pt">шт.</font>
        </p>
    </td>
    <td width="70" style="border: 1px solid #000000; padding: 0in 0.08in; position: relative; top: 0in; left: 0.3in;">
        <p lang="ru-RU" class="western" align="right">
            <font size="2" style="font-size: 11pt"><?=$price;?></font>
        </p>
    </td>
    <td width="80" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1.50pt solid #000000; padding: 0in 0.08in; position: relative; top: 0in; left: 0.3in;">
        <p lang="ru-RU" class="western" align="right">
            <font size="2" style="font-size: 11pt"><?= $price * $counter;?></font>
        </p>
    </td>
</tr>
</form>
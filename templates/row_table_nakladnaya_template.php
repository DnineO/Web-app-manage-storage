<?php

//var_dump($_POST);
if (isset($_POST['select2']) and !empty($_POST)){
    $note = $_POST['select2'][0]." ".$_POST['select3'][0]." ,".$_POST['count']." шт.;";
}else{
    $note = get_waybill($_POST['id_waybill'])[0]['note'];
}
$product = explode(',',explode(';',$note)[0]);
$name = explode(' ',$product[0]);
$price = get_product_by_name_form($name[0], $name[1])[0]['price'];
//var_dump($product);
//var_dump($name);
//var_dump($price);

$counter = explode(' ',$product[1])[0];

?>

<form action="" method="post">
    <tr>
        <!--    <td width="27" height="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1.50pt solid #000000; border-right: 1px solid #000000; padding: 0in 0.08in;position: relative; top: 0in; left: 0.3in;">-->
        <!--        <p lang="ru-RU" class="western" align="center">-->
        <!--            <font size="2" style="font-size: 11pt">--><?//=$id_product;?><!--</font>-->
        <!--        </p>-->
        <!--    </td>-->
        <td width="322" style="border: 1px solid #000000; padding: 0in 0.08in; position: relative; top: 0in; left: 0.3in;">
            <p lang="ru-RU" class="western" align="left">
                <font size="2" style="font-size: 11pt"><?=$product[0];?></font>
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
<?php
//echo('empty product page ');
//var_dump($_GET);

$id_product = (int)$_GET['id'];
$product = get_product($id_product);

//var_dump($product);
$name_product = $product[0]['name_product'];
$form = $product[0]['form'];
$counter = $product[0]['counter'];
$price = $product[0]['price'];

?>

<form action="" method="post">
<div class="formData">
    <table class="table">
        <tbody>
        <th>
            <tr>
                <td>
                    <img src="../../img/<?=$id_product;?>.gif" style="width: 40%">
                </td>
                <td></td>
            </tr>
            <tr><td><span class="lead">Наименование </span>
                    <font size="4" color="#808080"></font></td>
                <td><input class="form-check-input" name="name" value="<?=$name_product;?>" disabled style="width:40%;"></td>
            </tr>

            <tr><td><span class="lead">Форма </span>
                    <font size="4" color="#808080"></font></td>
                <td><input class="form-check-input" name="form" value="<?=$form;?>" disabled style="width:40%;"></td>
            </tr>

            <tr><td><span class="lead">Кол-во факт. </span>
                    <font size="4" color="#808080"></font></td>
                <td><input class="form-check-input" name="count" type="number" value="<?=$counter;?>"  style="width:40%;"></td>
            </tr>
            <tr><td><span class="lead">Цена за шт.</span>
                    <font size="4" color="#808080"></font></td>
                <td><input class="form-check-input" name="price" type="number" value="<?=$price?>"  style="width:40%;"></td>
            </tr>
        </th>
        </tbody>
    </table>
</div>
    <div class="btn-toolbar">
        <div>
            <p>
                <button class="btn btn-secondary" type="submit" onclick="">Сохранить</button>
                <input type="hidden" name="id_product" value="<?=$id_product?>">
            </p>
        </div>
</form>
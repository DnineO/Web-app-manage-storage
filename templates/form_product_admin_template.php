<?php
//echo('empty product page ');
//var_dump($_GET);

//$id_product = (int)$_GET['id'];
//$product = get_product($id_product);
//
////var_dump($product);
//$name_product = $product[0]['name_product'];
//$form = $product[0]['form'];
//$counter = $product[0]['counter'];
//$price = $product[0]['price'];
$id_product = get_max_id_product()[0]['id_product'] + 1;
?>

<form action="products_admin_page.php" method="post">
    <div class="formData">
        <table class="table">
            <tbody>
            <th>
<!--                <tr>-->
<!--                    <td>-->
<!--                        <img src="../../img/--><?//=$id_product;?><!--.gif" style="width: 40%">-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <input type="hidden" value="none">-->
<!--                    </td>-->
<!--                </tr>-->
                <tr><td><span class="lead">Наименование </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input required class="form-check-input" name="name" value=""  style="width:40%;"></td>
                </tr>

                <tr><td><span class="lead">Форма </span>
                        <font size="4" color="#808080"></font></td>
                    <td><select class="form-select" style="width: 40%;" name="form[]" required>
<!--                            <option selected disabled>Выберите</option>-->
                            <option value="круглый">Круглый</option>
                            <option value="прямоугольный">Прямоугольный</option>
                        </select></td>
                </tr>

                <tr><td><span class="lead">Кол-во факт. </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input required class="form-check-input" name="count" type="number" value=""  style="width:40%;"></td>
                </tr>
                <tr><td><span class="lead">Цена за шт.</span>
                        <font size="4" color="#808080"></font></td>
                    <td><input required class="form-check-input" name="price" type="number" value=""  style="width:40%;"></td>
                </tr>
            </th>
            </tbody>
        </table>
    </div>
    <div class="btn-toolbar">
        <div>
            <p>
                <button class="btn btn-secondary" name="add_product" type="submit" onclick="">Добавить</button>
                <input type="hidden" name="id" value="<?=$id_product?>">
            </p>
        </div>
</form>
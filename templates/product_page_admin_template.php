<?php

if (isset($_POST['save'])){
//  var_dump($_POST);
    $id_product = (int)$_POST['id'];
    $name = $_POST['name'];
    $form = $_POST['form'];
    $counter = $_POST['count'];
    $price = $_POST['price'];
    update_product_admin($id_product,$name,$form,$counter,$price);
    alert('Сохранено успешно');
}else {
//    var_dump($product);
    $id_product = $_POST['id'];
    $product = get_product($id_product);
    $name = $product[0]['name_product'];
    $form = $product[0]['form'];
    $counter = $product[0]['counter'];
    $price = $product[0]['price'];
}

?>


<form action="" method="post">
    <div class="formData">
        <table class="table">
            <tbody>
            <th>
                <tr><td><span class="lead">Наименование </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input required class="form-check-input" name="name" value="<?=$name?>"  style="width:40%;"></td>
                </tr>

                <tr><td><span class="lead">Форма </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input required class="form-check-input" name="form" style="width: 40%;" value="<?=$form?>"></td>
                </tr>

                <tr><td><span class="lead">Кол-во факт. </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input required class="form-check-input" name="count" type="number" value="<?=$counter?>"  style="width:40%;"></td>
                </tr>

                <tr><td><span class="lead">Цена за шт.</span>
                        <font size="4" color="#808080"></font></td>
                    <td><input required class="form-check-input" name="price" type="number" value="<?=$price?>"  style="width:40%;"></td>
                </tr>
            </th>
            </tbody>
        </table>
    </div>
    <div class="btn-toolbar">
        <div>
            <p>
                <button class="btn btn-secondary" name="save" type="submit" onclick="">Сохранить</button>
                <input type="hidden" name="id" value="<?=$id_product?>">
            </p>
</form>
<form action="products_admin_page.php" method="post">
            <p>
                <button class="btn btn-secondary" name="delete" type="submit" onclick="">Удалить</button>
                <input type="hidden" name="id" value="<?=$id_product?>">
            </p>
</form>
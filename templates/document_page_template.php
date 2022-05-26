<?php
echo('empty document page ');
//var_dump($_GET);

$id_waybill = $_GET['id'];
$waybill = get_waybill($id_waybill);
//var_dump($waybill);
$number = $waybill[0]['id_waybill'];
$operation = $waybill[0]['operation'];
$date = $waybill[0]['date_of_waybill'];
$note = $waybill[0]['note'];
$id_agent = $waybill[0]['id_agent_fk'];
$id_provider = $waybill[0]['id_provider_fk'];
$id_customer = $waybill[0]['id_customer_ft'];

echo($number);
echo($operation);
echo($date);
echo($note);
echo($id_agent);

?>

<form action="" method="post">
    <div class="formData">
        <table class="table">
            <tbody>
            <th>
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
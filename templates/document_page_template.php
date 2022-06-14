<?php
//echo('empty document page ');
//var_dump($_GET);

$id_waybill = $_GET['id'];

if (isset($_POST['save'])){
    $new_note = $_POST['note'];
    $new_customer = $_POST['customer'];
    update_waybill_save($id_waybill,$new_note,$new_customer);
    alert('Сохранено успешно');
    // TODO: обновление данных / сохранение (готово)
}

$waybill = get_waybill($id_waybill);
$number = $waybill[0]['id_waybill'];
$operation = $waybill[0]['operation'];
$date = $waybill[0]['date_of_waybill'];
$customer = $waybill[0]['customer'];
$id_agent = $waybill[0]['id_agent_fk'];
$id_provider = $waybill[0]['id_provider_fk'];
$agent = get_surname($id_agent);


if (isset($_POST['count_order']) and !empty($_POST['count_order'][0])){
    $st = get_waybill(get_max_id_document()[0]['id_waybill'])[0]['note'];
//    var_dump($st);
    if (isset($_POST['D']) and !empty($_POST['D'])) {
        $st = $st." Ø".$_POST['D'];
    }
    if (isset($_POST['L']) and !empty($_POST['L'])){
        $st = $st." L".$_POST['L'];
    }
    if (isset($_POST['A']) and !empty($_POST['A'])){
        $st = $st." A".$_POST['A'];
    }
    if (isset($_POST['B']) and !empty($_POST['B'])){
        $st = $st." B".$_POST['B'];
    }
    if (isset($_POST['C']) and !empty($_POST['C'])){
        $st = $st." C".$_POST['C'];
    }
    if (isset($_POST['count_order']) and !empty($_POST['count_order'])){
        $st = $st."," . $_POST['count_order']." шт.;";
    }
    update_waybill($st);
    $note = $st;
}else{
    $note = $waybill[0]['note'];
}

?>

<form action="" method="post">
    <div class="formData">
        <table class="table">
            <tbody>
            <th>
                </tr>
                <tr><td><span class="lead">Наименование операции </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input class="form-check-input" name="operation" value="<?=$operation;?>" disabled style="width:40%;"></td>
                </tr>

                <tr><td><span class="lead">Дата </span>
                        <font size="4" color="#808080"></font></td>
                    <td><input class="form-check-input" name="date" value="<?=$date;?>" disabled style="width:40%;"></td>
                </tr>

                <tr><td><span class="lead">Описание </span>
                        <font size="4" color="#808080"></font></td>
                    <td><textarea class="form-control" rows="5" cols="40" name="note" style="width: 40%; height: 10%"><?=$note;?></textarea></td>
<!--                    <td><input class="form-check-input" name="note" type="text" value="--><?//=$note;?><!--"  style="width:40%;"></td>-->
                </tr>
                <tr><td><span class="lead">Покупатель</span>
                        <font size="4" color="#808080"></font></td>
                    <td><input class="form-check-input" name="customer" type="text" value="<?=$customer?>"  style="width:40%;"></td>
                </tr>
                <tr><td><span class="lead">Работник</span>
                        <font size="4" color="#808080"></font></td>
                    <td><input disabled class="form-check-input" name="agent" type="text" value="<?=$agent?>"  style="width:40%;"></td>
                </tr>
            </th>
            </tbody>
        </table>
    </div>
    <div class="btn-toolbar">
        <div>
            <p>
                <button name="save" class="btn btn-secondary" type="submit" onclick="" value="save">Сохранить</button>
            </p>
        </div>
    </div>
</form>
<form action="" method="post">
        <div class="btn-toolbar">
            <p>
            <button name="print" class="btn btn-secondary" formaction="/templates/schet_IP_template.php">Печать</button>
            <input type="hidden" name="id_waybill" value="<?=$id_waybill?>">
            <input type="hidden" name="operation" value="<?=$operation?>">
            <input type="hidden" name="date" value="<?=$date?>">
            <input type="hidden" name="customer" value="<?=$customer?>">
            <input type="hidden" name="date_waybill" value="<?=$date?>">
            <input type="hidden" name="agent" value="<?=$agent?>">
            <input type="hidden" name="note" value="<?=$note?>">
            </p>
        </div>
</form>
<form action="" method="post">
    <div class="btn-toolbar">
        <p>
            <button name="print" class="btn btn-secondary" formaction="/templates/nakladnaya_template.php">Печать накладной</button>
            <input type="hidden" name="id_waybill" value="<?=$id_waybill?>">
            <input type="hidden" name="operation" value="<?=$operation?>">
            <input type="hidden" name="date" value="<?=$date?>">
            <input type="hidden" name="customer" value="<?=$customer?>">
            <input type="hidden" name="date_waybill" value="<?=$date?>">
            <input type="hidden" name="agent" value="<?=$agent?>">
            <input type="hidden" name="note" value="<?=$note?>">
        </p>
    </div>
</form>

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

<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
</div>
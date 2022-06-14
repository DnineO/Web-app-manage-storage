<?php

if (session_status() == PHP_SESSION_NONE){
    session_start();
}

require_once dirname(__DIR__, 1)."/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";


date_default_timezone_set('UTC');
$date = date("d.m.Y");

$customer = $_SESSION['name'];

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Товарная накладная</title>
    <style type="text/css">
        @page { size: 8.27in 11.69in; margin-right: 0.52in; margin-top: 0.18in; margin-bottom: 0.18in }
        p { color: #000000;  orphans: 2; widows: 2; direction: ltr; background: transparent }
        p.western { font-family: "Times New Roman", serif; font-size: 13pt; so-language: ru-RU; padding-right: 0.1in; padding-left: 0.1in; padding-top: 1%}
        p.cjk { font-family: "Times New Roman", serif; font-size: 13pt }
        p.ctl { font-family: "Times New Roman", serif; font-size: 12pt; so-language: ar-SA }
        a:link { color: #0000ff; text-decoration: underline }
    </style>
</head>

<body lang="en-US" text="#000000" link="#0000ff" vlink="#800000" dir="ltr" onload="window.print()">

<div title="header" style="width: 100%">
    <p class="ctl" lang="ru-RU" align="left" style="font-weight: normal; page-break-after: avoid; text-align: center; position: relative; left: 0.1in;">
        <font size="4" style="font-size: 16pt">Результат инветаризации от <?=$date?></font>
    </p>

</div>



<div style="position: relative; padding: 0.4in">
    <?php
    $table = "";
//    var_dump($_POST['new_count']);
    $products = get_products();
//    var_dump($products);
    foreach ($products as $product) {
        if ($_POST['new_count'][$product['id_product']] != 0) {
//        var_dump($product);
            $table = $table . render_template_row_inventory_result($product);
        }
    }
    $table = render_template_table_inventory_result($table);
    render_document('Table', $table);

    ?>

    </table>
</div>

<table width="683" cellpadding="7" cellspacing="0">

    <tr>
        <td colspan="3" width="300" height="4" valign="top" style="border: none; padding: 0in; position: relative; top: 0.2in; left: 0.4in;">
            <p lang="ru-RU" class="western" align="left">
                <font size="2" style="font-size: 14pt">Провел проверку:  <?=$customer ?> ____________</font></p>
        </td>
        <td width="300" height="4" valign="top" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="left">
                <br/>
            </p>
<!--            <p lang="ru-RU" class="western" align="left"><font size="2" style="font-size: 11pt; position: relative; top: 0in; left: 0in;">Принял: --><?//=$saler?><!-- ____________</font></p>-->
</body>
</html>


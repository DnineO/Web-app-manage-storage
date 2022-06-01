<?php

if (session_status() == PHP_SESSION_NONE){
    session_start();
}

require_once dirname(__DIR__, 1)."/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";

$date = "01.01.2000"; // Дата
$number = 2; // Порядковое число
$customer = "Забаровский допустим"; // Кто
$saler = "Допустим Забаровскому"; // Кому
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Товарная накладная</title>
    <style type="text/css">
        @page { size: 8.27in 11.69in; margin-right: 0.52in; margin-top: 0.18in; margin-bottom: 0.18in }
        p { color: #000000;  orphans: 2; widows: 2; direction: ltr; background: transparent }
        p.western { font-family: "Times New Roman", serif; font-size: 13pt; so-language: ru-RU }
        p.cjk { font-family: "Times New Roman", serif; font-size: 13pt }
        p.ctl { font-family: "Times New Roman", serif; font-size: 12pt; so-language: ar-SA }
        a:link { color: #0000ff; text-decoration: underline }
    </style>
</head>

<body lang="en-US" text="#000000" link="#0000ff" vlink="#800000" dir="ltr" onload="window.print()">

<div title="header" style="width: 50%">

    <table width="697" cellpadding="3" cellspacing="0">
        <col width="327"/>
        <col width="342"/>
        <tr valign="top">
            <td width="342" style="border: none; padding: 0in">
                <p lang="ru-RU" class="western" align="right">
                    <font size="2" style="font-size: 10pt; position: absolute; top: 0.5in; left: 6.82in;"><b>от <?=$date?></b></font></p>
            </td>
        </tr>
    </table>
</div>

<table width="683" cellpadding="7" cellspacing="0">
    <col width="669"/>
    <tr>
        <td width="669" valign="top" style="border: none; padding: 0in">
            <p class="ctl" lang="ru-RU" align="left" style="font-weight: normal; page-break-after: avoid; text-align: center; position: absolute; top: 0.6in; left: 3.5in;">
                <font size="4" style="font-size: 14pt">НАКЛАДНАЯ № <?=$number?></font>
            </p>
        </td>
    </tr>
</table>

<table width="683" cellpadding="7" cellspacing="0">

    <tr valign="top">
        <td width="89" style="border: none; padding: 0in">
            <p lang="ru-RU" class="western" align="left">
                <font size="2" style="font-size: 11pt; position: relative; left: 0.4in">Кому:</font>
            </p>
        </td>
        <td width="565" style="border: none; padding: 0in">
            <p class="ctl" lang="ru-RU" align="left">
                <font size="3" style="font-size: 11pt; position: relative; left: 0.2in;"><font size="2" style="font-size: 11pt; text-align: left"><?=$saler?></font>
        </td>
    </tr>
    <tr valign="top">
        <td width="89" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="justify">
                <font size="2" style="font-size: 11pt; position: relative; left: 0.4in;">От кого:</font></p>
        </td>
        <td width="565" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="left">
                <font size="2" style="font-size: 11pt; position: relative; left: 0.2in;"><?=$customer?></font></p>
        </td>
    </tr>
</table>

<div style="position: relative;">
    <?php
    $table = "";

    $products = get_products();

    foreach ($products as $product){

        $table = $table.render_template_row_document($product);
    }
    $table = render_template_table_document($table);
    render_document('Table', $table);

    ?>

    </table>
</div>

<table width="683" cellpadding="7" cellspacing="0">

    <tr>
        <td colspan="3" width="300" height="4" valign="top" style="border: none; padding: 0in; position: relative; top: 0.4in; left: 0.4in;"><p lang="ru-RU" class="western" align="left">
                <font size="2" style="font-size: 11pt">Сдал:  <?=$customer ?> ____________</font></p>
        </td>
        <td width="300" height="4" valign="top" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="left">
                <br/>
            </p>
            <p lang="ru-RU" class="western" align="left"><font size="2" style="font-size: 11pt; position: relative; top: 0in; left: 0in;">Принял: <?=$saler?> ____________</font>
            </p>
</body>
</html>


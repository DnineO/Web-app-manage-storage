<?php

if (session_status() == PHP_SESSION_NONE){
    session_start();
}

require_once dirname(__DIR__, 1)."/back/functions.php";
require_once dirname(__DIR__, 1) . "/back/query.php";
require_once dirname(__DIR__, 1) . "/back/templates.php";


if (isset($_POST['print'])){
//    var_dump($_POST);
    $number = $_POST['id_waybill'];
    $date = $_POST['date_waybill'];
    $customer = $_POST['customer'];
    $user = $_POST['agent'];
    $operation = $_POST['operation'];
    $note = $_POST['note'];
    $products = explode(";",$note)[0];
//    var_dump($products);
    $product = explode(',',explode(';',$note)[0]);
    $name = explode(' ',$product[0]);
    $price = get_product_by_name_form($name[0], $name[1])[0]['price'];
    $counter = explode(' ',$product[1])[0];
    $sum = $price * $counter;
}else{
    $number = get_max_id_document()[0]['id_waybill'] + 1;
    $date = '01.01.2022';
    $customer = 'Забаровский допустим';
    $sum = "Сумматоваров";
    $scores = [1,5,3,4];
    $user = get_admin('Забаровский')[0]['surname'];
    $number_product = get_max_id_product()[0]['id_product'];
    $operation = "Акт";
}


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>Акт</title>
	<style type="text/css">
		@page { size: 8.27in 11.69in; margin-right: 0.52in; margin-top: 0.18in; margin-bottom: 0.18in }
		p { color: #000000;  orphans: 2; widows: 2; direction: ltr; background: transparent }
		p.western { font-family: "Times New Roman", serif; font-size: 13pt; so-language: ru-RU }
		p.cjk { font-family: "Times New Roman", serif; font-size: 13pt }
		p.ctl { font-family: "Times New Roman", serif; font-size: 12pt; so-language: ar-SA }
		a:link { color: #0000ff; text-decoration: underline }
	</style>
</head>
<!--onload="window.print()"-->
<body lang="en-US" text="#000000" link="#0000ff" vlink="#800000" dir="ltr" onload="window.print()">
<div title="header" style="width: 50%;">

<!--    Рисунок лого, задан ручками -->
	<p lang="ru-RU" class="western" align="left">
		<span class="sd-abs-pos" style="position: absolute; top: 0.4in; left: 0.5in; width: 102px">
			<img src="../img/logo.png" name="Рисунок 1" width="102" height="94" border="0"/>
		</span><span style="background: #ffffff"></span>
	</p>

	<p lang="ru-RU" align="left"><br/></p>

	<table width="697" cellpadding="3" cellspacing="0">
		<col width="327"/>
		<col width="342"/>
		<tr valign="top">
			<td width="327" style="border: none; padding: 0in">

<!--                Рисунок линии-->
                <p lang="ru-RU" align="left">
				    <span class="sd-abs-pos" style="position: absolute; top: 1.3in; left: 0.1in; width:720px">
                        <img src="../img/line_logo.png" name="Рисунок 2" width="110%" height="21" border="0"/></span><br/>
				</p>
			</td>

<!--            Блок текста -->
			<td width="342" style="border: none; padding: 0in">
                <p lang="ru-RU" class="western" align="right">
                    <font size="2" style="font-size: 10pt; position: absolute; top: 0.5in; left: 6.82in;"><b>ИП Гараевский А.Н.</b></font></p>
				<p lang="ru-RU" class="western" align="right">
                    <font size="2" style="font-size: 10pt; position: absolute; top: 0.7in; left: 5.38in;"><b>ИНН 753403904710, ОГРН 321753600023885</b></font></p>
				<p lang="ru-RU" class="western" align="right" style="margin-left: 1.01in">
                    <font size="2" style="font-size: 10pt; position: absolute; top: 0.88in; left: 6.55in;"><b>г. Чита, ул. Чкалова, 1/56</b></font></p>
				<p lang="ru-RU" class="western" align="right" style="margin-left: 1.01in">
                    <font face="Cambria, serif"><font size="2" style="font-size: 9pt; position: absolute; top: 1.06in; left: 6.77in;"><b>Тел.:	+7-914-460-5964</b></font></font></p>
				<p align="right"><font size="3" style="font-size: 12pt">
                        <font color="#0000ff">
                            <font face="Cambria, serif"><font size="2" style="font-size: 9pt; position: absolute; top: 1.24in; left: 6.77in;"><i><b>E-mail:</b></i></font></font></font>
                        <a href="mailto:1@windfresh.ru"><font color="#0000ff"><font face="Cambria, serif"><font size="2" style="font-size: 9pt; position: absolute; top: 1.24in; left: 7.19in;"><i><u><b>1@windfresh.ru</b></u></i></font></font></font></a></font></p>
			</td>
		</tr>
	</table>
</div>

<!--<p lang="ru-RU" align="left" style="margin-bottom: 0.5in"><br/></p>-->

<!--Номер документа, число-->
<table width="683" cellpadding="7" cellspacing="0">
	<col width="669"/>
	<tr>
		<td width="669" valign="top" style="border: none; padding: 0in">
            <p class="ctl" lang="ru-RU" align="left" style="font-weight: normal; page-break-after: avoid; text-align: center">
			    <font size="4" style="font-size: 14pt"><?=$operation?> № <?=$number?>  от <?=$date?> </font></p>
		</td>
	</tr>
</table>

<p lang="ru-RU" style="border-top: none; border-bottom: 1pt solid #000000; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.01in; padding-left: 0in; padding-right: 0in; page-break-after: avoid"><br/></p>
<!--<p lang="ru-RU" class="western" align="left"><br/></p>-->

<table width="683" cellpadding="7" cellspacing="0">
	<col width="89"/>

	<col width="565"/>

	<tr valign="top">
		<td width="89" style="border: none; padding: 0in">
            <p lang="ru-RU" class="western" align="left">
			    <font size="2" style="font-size: 11pt; position: relative; top: 0in; left: 0.4in;">Поставщик:</font>
            </p>
		</td>
		<td width="565" style="border: none; padding: 0in">
            <p class="ctl" lang="ru-RU" align="left">
			    <font size="3" style="font-size: 11pt; position: relative; top: 0in; left: 0.6in;"><font size="2" style="font-size: 11pt; text-align: left">ИП Гараевский Алексей Николаевич, ИНН	753403904710, г. Чита, ул 1ая Новопроточная	1, тел.: +7-914-144-9500, E-mail: </font>
                    <font size="2" style="font-size: 11pt"><span lang="en-US">buh</span></font><font size="2" style="font-size: 11pt">@windfresh.ru</font></font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="89" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="justify">
			<font size="2" style="font-size: 11pt; position: relative; top: 0in; left: 0.4in;">Покупатель:</font></p>
		</td>
		<td width="565" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="left">
			<font size="2" style="font-size: 11pt; position: relative; top: 0in; left: 0.6in;"><?=$customer?></font></p>
		</td>
	</tr>
</table>

<!--<p lang="ru-RU" class="western" align="left"><br/></p>-->

<?php
//
$table = "";
//    var_dump($scores);
$table = $table.render_template_row_document($products);
//foreach ($products as $score) {
////        var_dump($score);
//    $table = $table.render_template_row_document($score);
//}

//TODO: доделать таблицу документа, вывод
$table = render_template_table_document($table);
//    var_dump($table);
render_document('Table',$table);
?>

</table>
<p lang="ru-RU" class="western" align="left"><br/>

</p>
<table width="683" cellpadding="7" cellspacing="0">
	<col width="425"/>

	<col width="130"/>

	<col width="85"/>

	<tr valign="top">
		<td width="425" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="left">
			<br/>

			</p>
		</td>
		<td width="130" style="border: none; padding: 0in">
            <p lang="ru-RU" class="western" align="right" style="position: relative; top: 0in; left: 0.4in;">
			    <font size="2" style="font-size: 11pt"><b>Итого:</b></font>
            </p>
		</td>
		<td width="85" style="border: none; padding: 0in">
            <p lang="ru-RU" class="western" align="right" style="letter-spacing: 1.2pt; position: relative; top: 0in; left: 0.2in;">
			<font size="2" style="font-size: 11pt"><b><?=$sum?></b></font></p>
		</td>
	</tr>

<!--	<tr valign="top">-->
<!--		<td width="425" style="border: none; padding: 0in">-->
<!--            <p lang="ru-RU" class="western" align="left" style="letter-spacing: 1.2pt">-->
<!--			<br/>-->
<!---->
<!--			</p>-->
<!--		</td>-->
<!--	<tr valign="top">-->
<!--		<td width="425" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="left" style="letter-spacing: 1.2pt">-->
<!--			<br/>-->
<!---->
<!--			</p>-->
<!--		</td>-->
<!--		<td width="130" style="border: none; padding: 0in">-->
<!--            <p lang="ru-RU" class="western" align="right" style="position: relative; top: 0in; left: 0.4in;">-->
<!--			    <font size="2" style="font-size: 11pt"><b>Всего к оплате:</b></font>-->
<!--            </p>-->
<!--		</td>-->
<!--		<td width="85" style="border: none; padding: 0in">-->
<!--            <p lang="ru-RU" class="western" align="right" style="letter-spacing: 1.2pt; position: relative; top: 0in; left: 0.4in;">-->
<!--			    <font size="2" style="font-size: 11pt"><b>--><?//=$sum?><!--</b></font>-->
<!--            </p>-->
<!--		</td>-->
<!--	</tr>-->
<!--	<tr valign="top">-->
<!--		<td width="425" style="border: none; padding: 0in">-->
<!--            <p lang="ru-RU" class="western" align="left" style="position: relative; top: 0in; left: 0.4in;">-->
<!--			    <font size="2" style="font-size: 11pt">Всего наименований --><?//=$number_product?><!--, на сумму --><?//=$sum?><!-- руб.</font>-->
<!--            </p>-->
<!--		</td>-->
<!--		<td width="130" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="left">-->
<!--			<br/>-->
<!---->
<!--			</p>-->
<!--		</td>-->
<!--		<td width="85" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="left">-->
<!--			<br/>-->
<!---->
<!--			</p>-->
<!--		</td>-->
<!--	</tr>-->

</table>
<p lang="ru-RU" style="border-top: none; border-bottom: 1pt solid #000000; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.01in; padding-left: 0in; padding-right: 0in; page-break-after: avoid">
<br/>

</p>
<!--<p lang="ru-RU" class="western" align="left"><br/></p>-->

<table width="683" cellpadding="7" cellspacing="0">
	<col width="221"/>

	<col width="226"/>

	<col width="194"/>

	<tr>
		<td colspan="3" width="669" height="4" valign="top" style="border: none; padding: 0in; position: relative; top: 0in; left: 0.4in;"><p lang="ru-RU" class="western" align="left">
			<font size="2" style="font-size: 11pt">Исполнитель:	<?=$user?></font></p>
		</td>
	</tr>
	<tr>
		<td width="221" height="203" valign="top" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="left">
			<br/>

			</p>
			<p lang="ru-RU" class="western" align="left"><font size="2" style="font-size: 11pt; position: relative; top: 0in; left: 0.4in;">
                    <img src="../img/pechat2.png" name="Image1" align="left" hspace="12" width="150" height="147" border="0" style="position: absolute; top: 0in; left: 0.4in;"/>Индивидуальный
                    предприниматель</font>
            </p>
			<p lang="ru-RU" class="western" align="left">
                <font size="2" style="font-size: 11pt; position: relative; top: -0.2in; left: 0.4in">Гараевский А.Н.</font>
                    <img src="../img/rospis.png" name="Image2" align="left" hspace="12" width="150" height="50" border="0" style="position: relative; top: -0.5in; left: 2in"/>
            </p>
			<p lang="ru-RU" class="western" align="left"><br/>

			</p>
			<p lang="ru-RU" class="western" align="left"><br/>

			</p>
			<p lang="ru-RU" class="western" align="left"><br/>

			</p>
			<p lang="ru-RU" class="western" align="left"><br/>

			</p>
		</td>
		<td width="226" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="center">
			<br/>

			</p>
		</td>
		<td width="194" valign="top" style="border: none; padding: 0in"><p lang="ru-RU" class="western" align="left">
			<br/>

			</p>
			<p lang="ru-RU" class="western" align="left"><br/>

			</p>
			<p lang="ru-RU" class="western" align="left"><br/>

			</p>
			<p lang="ru-RU" class="western" align="left"><br/>

			</p>
			<p lang="ru-RU" class="western" align="left"><br/>

			</p>
		</td>
	</tr>
</table>
<p lang="ru-RU" class="western" align="left"><br/></p>

</body>
</html>
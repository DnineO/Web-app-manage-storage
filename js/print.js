
// Вывод страницы на печать (пример)
function callPrint() {
    var printCSS = '<link rel="stylesheet" href="css/starter-template.css" type="text/css" /> ' +
                    '<link href="../css/bootstrap.css" rel="stylesheet">';
    var printTitle = document.getElementById('print-title').innerHTML;
    var printText = document.getElementById('print-text').innerHTML;
    var windowPrint = window.open('','','left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
    windowPrint.document.write(printCSS);
    windowPrint.document.write(printTitle);
    windowPrint.document.write(printText);
    windowPrint.document.close();
    windowPrint.focus();
    windowPrint.print();
    windowPrint.close();
}

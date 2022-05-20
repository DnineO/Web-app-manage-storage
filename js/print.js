
// Вывод страницы на печать (пример)
function callPrint(strid) {
    var printContent = document.getElementById(strid)
    var printCSS = '<link href="../css/bootstrap.css" rel="stylesheet">';
    var windowPrint = window.open('','','left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
    // windowPrint.document.write('<div id="print" class="contentpane">');
    windowPrint.document.write(printCSS);
    windowPrint.document.write(printContent.innerHTML);
    // windowPrint.document.write('</div>')
    windowPrint.document.close();
    windowPrint.focus();
    windowPrint.print();
    windowPrint.close();
}

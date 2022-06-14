<?php

function template($file, $args){
//echo $file;

 // проверяем, существует ли файл
    if ( !file_exists( $file ) ) {
//        echo $file;
        return 'Файла не существует';
    }

    // распаковываем массив
    if ( is_array( $args ) ){
        extract( $args );
    }
//    echo extract($args);

    // буфферезируем вывод
    ob_start();
    include $file;
    return ob_get_clean();
}

// Рендер страницы с контентом
function render_page($title, $content){
    // Формируем страницу
    $file = dirname(__DIR__, 1).'/templates/layout.php';
    //echo $file;
    $content = ['title' => $title, 'content' => $content];
    $page = template($file, $content);
//    TODO: подвал
    print $page;
}


function template_document($file,$args){
//echo $file;

    // распаковываем массив
    if ( is_array( $args ) ){
        extract( $args );
    }
//    echo extract($args);

    // буфферезируем вывод
    ob_start();
    include $file;
    return ob_get_clean();
}

// Рендер документа
function render_document($title, $content){
    // Формируем страницу
    $file = dirname(__DIR__, 1).'/templates/template.php';
    //echo $file;
    $content = ['title' => $title, 'content' => $content];
    $page = template_document($file,$content);
    print $page;
}


// Рендер титульной страницы
function render_template_index_form(){
    return template(dirname(__DIR__,1).'/templates/index_form_template.php',[]);
}

// Рендер главной страницы
function render_template_main_page(){
    return template(dirname(__DIR__,1).'/templates/main_page_template.php',[]);
}

// Рендер страницы юзера
function render_template_user_page($args){
    return template(dirname(__DIR__,1).'/templates/user_page_template.php',$args);
}

// Рендер главной страницы админа
function render_template_main_admin_page(){
    return template(dirname(__DIR__,1).'/templates/main_admin_page_template.php',[]);
}

// Рендер личной страницы админа
function render_template_admin_page($args){
    return template(dirname(__DIR__,1).'/templates/admin_page_template.php',$args);
}

// Рендер страницы с пользователями
function render_template_users_admin_page(){
    return template(dirname(__DIR__,1).'/templates/users_admin_template.php',[]);
}

// Рендер страницы с товарами
function render_template_products_admin_page(){
    return template(dirname(__DIR__,1).'/templates/products_admin_template.php',[]);
}

// Рендер страницы с документами
function render_template_documents_admin_page(){
    return template(dirname(__DIR__,1).'/templates/documents_admin_template.php',[]);
}

//
function render_template_user_admin_page(){
    return template(dirname(__DIR__,1).'/templates/user_admin_template.php',[]);
}

//
function render_template_user_add_page(){
    return template(dirname(__DIR__,1).'/templates/form_user_admin_template.php',[]);
}

// Таблица товаров
function render_template_row_product($args){
    return template(dirname(__DIR__,1).'/templates/row_table_product_template.php',$args);
}

function render_template_table_product($args){
    $args = ["table" => $args];
    return template(dirname(__DIR__,1).'/templates/table_product_template.php',$args);
}

// Таблица товаров админа
function render_template_row_admin_product($args){
    return template(dirname(__DIR__,1).'/templates/row_table_product_admin_template.php',$args);
}

function render_template_table_admin_product($args){
    $args = ["table" => $args];
    return template(dirname(__DIR__,1).'/templates/table_product_admin_template.php',$args);
}


// Таблица пользователей
function render_template_row_users($args){
    return template(dirname(__DIR__,1).'/templates/row_table_users_template.php',$args);
}

function render_template_table_users($args){
    $args = ["table" => $args];
    return template(dirname(__DIR__,1).'/templates/table_users_template.php',$args);
}

function render_template_providers_admin_page(){
    return template(dirname(__DIR__, 1) . '/templates/providers_admin_template.php',[]);
}




// Таблица документов
function render_template_row_waybill($args){
    return template(dirname(__DIR__,1).'/templates/row_table_waybill_template.php',$args);
}

function render_template_table_waybill($args){
    $args = ["table" => $args];
    return template(dirname(__DIR__,1).'/templates/table_waybill_template.php',$args);
}

// Таблица документов страница администратора
function render_template_row_admin_waybill($args){
    return template(dirname(__DIR__,1).'/templates/row_table_waybill_admin_template.php',$args);
}

function render_template_table_admin_waybill($args){
    $args = ["table" => $args];
    return template(dirname(__DIR__,1).'/templates/table_waybill_admin_template.php',$args);
}

// Рендер страницы оформления товара
function render_template_order_product_page(){
    return template(dirname(__DIR__,1).'/templates/form_order_product_template.php',[]);
}

function render_template_select_product($item){
    return template(dirname(__DIR__,1).'/templates/select_product_template.php',$item);
}

// Рендер индивидуальной страницы товара
function render_template_product_page(){
    return template(dirname(__DIR__,1).'/templates/product_page_template.php',[]);
}

function render_template_product_add_admin_page(){
    return template(dirname(__DIR__, 1) . '/templates/form_product_admin_template.php',[]);
}

// Рендер индивидуальной страницы товара
function render_template_product_admin_page(){
    return template(dirname(__DIR__,1).'/templates/product_page_admin_template.php',[]);
}




// Рендер индивидуальной страницы документа
function render_template_document_page(){
    return template(dirname(__DIR__,1).'/templates/document_page_template.php',[]);
}

function render_template_document_admin_page(){
    return template(dirname(__DIR__,1).'/templates/document_page_admin_template.php',[]);
}

// Рендер страницы приема/отгрузки
function render_template_reception_page(){
    return template(dirname(__DIR__,1).'/templates/reception_page_template.php',[]);
}

function render_template_reception_form(){
    return template(dirname(__DIR__,1).'/templates/form_reception_template.php',[]);
}

function render_template_shipping_form(){
    return template(dirname(__DIR__,1).'/templates/form_shipping_template.php',[]);
}

function render_template_select_provider($args){
    return template(dirname(__DIR__, 1) . '/templates/select_provider_template.php',$args);
}

// Рендер страницы инвентаризации
function render_template_inventory_page(){
    return template(dirname(__DIR__,1).'/templates/inventory_page_template.php',[]);
}

function render_template_row_inventory_product($args){
    return template(dirname(__DIR__,1).'/templates/row_product_inventory_template.php',$args);
}

function render_template_table_inventory_product($args){
    $args = ["table" => $args];
    return template(dirname(__DIR__,1).'/templates/table_product_inventory_template.php',$args);
}

function render_template_row_inventory_result($args){
    return template(dirname(__DIR__,1).'/templates/row_result_inventory_template.php',$args);
}

function render_template_table_inventory_result($args){
    $args = ["table" => $args];
    return template(dirname(__DIR__,1).'/templates/table_result_inventory_template.php',$args);
}


// Рендер строки документа Счет ИП
function render_template_row_document($item){
    return template(dirname(__DIR__, 1) . '/templates/row_table_document_schet_template.php',$item);
}

function render_template_table_document($args){
    $args = ["table"=>$args];
    return template(dirname(__DIR__, 1) . '/templates/table_document_schet_template.php',$args);
}

function render_template_row_nakladnaya($item){
    return template(dirname(__DIR__, 1) . '/templates/row_table_nakladnaya_template.php',$item);
}




// Рендер форм товаров
function render_template_adapter_circle(){
    return template(dirname(__DIR__,1).'/templates/products/adapter_circle_template.php',[]);
}

function render_template_adapter_cube(){
    return template(dirname(__DIR__,1).'/templates/products/adapter_cube_template.php',[]);
}

function render_template_vozduhovod_circle(){
    return template(dirname(__DIR__,1).'/templates/products/vozduh_circle_template.php',[]);
}

function render_template_vozduhovod_cube(){
    return template(dirname(__DIR__,1).'/templates/products/vozduh_cube_template.php',[]);
}

function render_template_vrezka_circle(){
    return template(dirname(__DIR__,1).'/templates/products/vrezka_circle_template.php',[]);
}

function render_template_vrezka_cube(){
    return template(dirname(__DIR__,1).'/templates/products/vrezka_cube_template.php',[]);
}
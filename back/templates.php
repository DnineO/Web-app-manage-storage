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

// Рендер титульной страницы
function render_template_index_form(){
    return template(dirname(__DIR__,1).'/templates/index_form_template.php',[]);
}

// Рендер главной страницы TODO: наполнение(к примеру список, товаров, документов)
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


// Таблица товаров
function render_template_row_product($args){
    return template(dirname(__DIR__,1).'/templates/row_table_product_template.php',$args);
}

function render_template_table_product($args){
    $args = ["table" => $args];
    return template(dirname(__DIR__,1).'/templates/table_product_template.php',$args);
}


// Таблица документов
function render_template_row_waybill($args){
    return template(dirname(__DIR__,1).'/templates/row_table_waybill_template.php',$args);
}

function render_template_table_waybill($args){
    $args = ["table" => $args];
    return template(dirname(__DIR__,1).'/templates/table_waybill_template.php',$args);
}

// Рендер страницы оформления товара/услуги
function render_template_order_product_page(){
    return template(dirname(__DIR__,1).'/templates/form_order_product_template.php',[]);
}


// Рендер форм товаров
function render_template_adapter_circle(){
    return template(dirname(__DIR__,1).'/templates/products/adapter_circle_template.php',[]);
}

function render_template_adapter_cube(){
    return template(dirname(__DIR__,1).'/templates/products/adapter_cube_template.php',[]);
}
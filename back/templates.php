<?php

function template($file, $args){
//echo $file;

 // проверяем, существует ли файл
    if ( !file_exists( $file ) ) {
        //echo $file;
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
function render_template_user_page(){
    return template(dirname(__DIR__,1).'/templates/user_page_template.php',[]);
}

// Рендер главной страницы админа
function render_template_main_admin_page(){
    return template(dirname(__DIR__,1).'/templates/main_admin_page_template.php',[]);
}

function render_template_admin_page($surname){
    return template(dirname(__DIR__,1).'/templates/admin_page_template.php',$surname);
}
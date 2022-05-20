<?php
    require_once 'database.php';

    // Создание запроса
    function query($query){
        $db = new DB();
//            die('Ошибка запроса: ' . pg_last_error());
        return pg_query($db->get_link(), $query);
        }

    // Запрос с возвратом массива
    function query_fetch_all($query){
        return pg_fetch_all(query($query), PGSQL_ASSOC);
    }

    // Возврат роли юзера
    function get_role($surname){
        return pg_fetch_all(query("select \"role_personal\" from \"Agent\" where '$surname' = \"surname\""));
    }

    // Запрос с возвратом массива пользователя из бд
    function get_admin($surname){
        return pg_fetch_all(query("select * from \"Agent\" where '$surname' = \"surname\""));
    }

    // Запрос с возвратом пароля пользователя
    function get_pass($id){
        return pg_fetch_all(query("select \"pass\" from \"Agent\" where '$id' = \"id_agent\" "))[0]['pass'];
    }

    function push_(){

    }

    // Запрос с возвратом всех товаров
    function get_products(){
        return pg_fetch_all(query("select * from \"Product\""));
    }

    // Запрос с возвратом всех документов
    function get_waybills(){
        return pg_fetch_all(query("select * from \"Waybill\""));
    }

    // Запрос с возвратом документов пользователя
    function get_waybills_user($args){
        $id_agent = get_admin($args)[0]['id_agent'];
    return pg_fetch_all(query("select * from \"Waybill\" where \"id_agent_fk\" = '$id_agent'"));
}

    function get_waybill($args){
        return pg_fetch_all(query("select * from \"Waybill\" where id_waybill = '$args'"));
    }

    // Запрос с возвратом всех пользователей
    function get_users(){
        return pg_fetch_all(query("select * from \"Agent\""));
    }

    // Запрос постащиков
    function get_providers(){
        return pg_fetch_all(query("select * from \"Provider\""));
    }

    // Смена пароля
    function change_pass($id,$new){
        pg_fetch_all(query("UPDATE public.\"Agent\"
	    SET \"pass\" = '$new'
	    WHERE id_agent= '$id';"));
    }

    // Возврат последнего значения id продукта
    function get_max_id_product(){
        return pg_fetch_all(query("SELECT id_product FROM \"Product\" ORDER BY id_product DESC LIMIT 1;"));
    }

    // Возврат последнего значения id агента
    function get_max_id_agent(){
        return pg_fetch_all(query("SELECT id_agent FROM \"Agent\" ORDER BY id_agent DESC LIMIT 1;"));
}

    // Возврат последнего значения id документа
    function get_max_id_document(){
        return pg_fetch_all(query("SELECT id_waybill FROM \"Waybill\" ORDER BY id_waybill DESC LIMIT 1;"));
    }


?>
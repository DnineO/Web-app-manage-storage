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

    // Запрос с возвратом всех пользователей
    function get_users(){
        return pg_fetch_all(query("select * from \"Agent\""));
    }

?>
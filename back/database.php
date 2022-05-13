<?php
class DB {
    var $login = "postgres"; // Логин
    var $pass = "1"; // Пароль
    var $name = "postgres"; // Название БД
    var $host = "localhost"; // Адрес хоста
    var $port = "5433"; // Порт для подключения

    // Хранение подключения
    var $link;

    // В конструкторе открываем соединение
    public function __construct() {
       $this->open_connection();
    }

    // В деструкторе закрываем соединение
    public function __destruct() {
        $this->close_connection();
    }

    // Возвращает подключение
    function get_link() {
        return $this->link;
    }

    // Открытие соединения с базой данных
    private function open_connection() {
        $this->link = pg_connect("host=$this->host port=$this->port dbname=$this->name user=$this->login password=$this->pass",);
    }

    // Закрытие соединения с базой данных
    private function close_connection() {
        pg_close($this->link);
    }
}

?>
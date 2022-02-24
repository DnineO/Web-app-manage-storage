<?php
    require_once 'database.php';

    // Создание запроса
    function query($query){
        $db = new DB();
            //die('Ошибка запроса: ' . pg_last_error());
        return pg_query($db->get_link(), $query);
        }

    // Запрос с возвратом массива
    function query_fetch_all($query){
        return pg_fetch_all(query($query), PGSQL_ASSOC);
    }

    function getClients(){
        return query_fetch_all("Select * from \"Client\";");
        }

    //вернет клиента по паспорту(массив)
    function getClientByPassport($passport){
        return query_fetch_all("Select * from \"Client\" WHERE \"Pasport_num_serial\" ='$passport';");
        }

    function getClient($key_client){
            return query_fetch_all("Select * from \"Client\" WHERE \"key_client\" ='$key_client';");
            }

    function getContract($key_client){
            return query_fetch_all("Select * from \"Contract\"
            left join \"Agent\" on \"key_agent\" = \"key_agent_Agent\"
            left join \"Status\" on \"number_contract_Contract\" = \"number_contract\"
            WHERE \"key_client_Client\" ='$key_client'
            Order by \"number_contract\" ASC;");
            }

    function getContractByNumber($key_contract){
                return query_fetch_all("SELECT * FROM \"Contract\"
                where number_contract = '$key_contract'");
                }

    function getContracts(){
                return query_fetch_all("Select * from \"Contract\"
                left join \"Agent\" on \"key_agent\" = \"key_agent_Agent\"
                left join \"Status\" on \"number_contract_Contract\" = \"number_contract\"
                Order by \"number_contract\" ASC ;");
                }

   //передает данные о клиенте в базу данных
    function sendClient($Surname,$Name,$Date_birth,$passport){
    $query = "SELECT * FROM \"Client\" WHERE \"Pasport_num_serial\"='$passport'";
            $query = query_fetch_all($query);
    //var_dump($query);
            if (empty($query)) {
                $insert_query = "INSERT INTO \"Client\"
                (key_client ,\"Surname\",\"Name\",\"Date_birth\",\"Pasport_num_serial\")
                VALUES (default,'$Surname','$Name','$Date_birth','$passport') returning key_client";
                $key_client = query_fetch_all($insert_query)[0]['key_client'];
                return $key_client;
            }
            else {
                return 'error';
            }
    }

    //передает данные о контракте в базу данных , сделать декомпозицию функции
    function sendContract($Purpose,$Date_start,$Date_end,$Date_check,$Control,$key_client,$Reason,$name){
         $get_agent = "Select key_agent From \"Agent\" Where \"Surname\" = '$name'";
         $key_agent = query_fetch_all($get_agent)[0]['key_agent'];

         //фильтр на пересечение дат
         $query = "Select \"number_contract\" from \"Contract\"
         Where daterange(\"Date_start\"::date, \"Date_end\"::date) * daterange('$Date_start'::date, '$Date_end'::date) <> 'empty'
         and \"key_client_Client\" = '$key_client'";
         $query = query_fetch_all($query);
         //var_dump($query);
         if (empty($query)){
              $insert_contract = "INSERT INTO \"Contract\"
              (number_contract, \"Purpose\", \"Date_start\", \"Date_end\", \"Control\", \"key_agent_Agent\", \"key_client_Client\")
              VALUES (default,'$Purpose','$Date_start','$Date_end','$Control','$key_agent','$key_client') returning \"number_contract\"";
         $number_contract = query_fetch_all($insert_contract)[0]['number_contract'];
              $insert_status = "INSERT INTO \"Status\"
              (key_status, \"Reason\", \"Date_check\", \"number_contract_Contract\")
              VALUES  (default, '$Reason', '$Date_check', '$number_contract') returning key_status";
         $key_status = query($insert_status);
         return $key_status;
         }
         else
         {
         return $key_status= 'error';
         }
    }

    //удаляет контракт
    function deleteContract($del_contract,$key_client){
    //выборка конктракта и связанного с ним статуса
    $contracts = "Select * from \"Contract\"
                  left join \"Agent\" on \"key_agent\" = \"key_agent_Agent\"
                  left join \"Status\" on \"number_contract_Contract\" = \"number_contract\"
                  WHERE \"key_client_Client\" ='$key_client' and number_contract = '$del_contract'";
    if (!empty($contracts)){
    $get_contract = "Select * From \"Contract\" Where \"number_contract\"= '$del_contract'";
    $number_contract = query_fetch_all($get_contract)[0]['number_contract'];

    $get_status = "Select * from \"Status\" Where \"number_contract_Contract\" = '$del_contract'";
    $number_status = query_fetch_all($get_status)[0]['key_status'];

    if ($number_contract = $del_contract){
        $delete_contract = "Delete from \"Contract\" Where number_contract = '$number_contract'";
        $key_query = query($delete_contract);
        $delete_status = "Delete from \"Status\" Where \"key_status\" = '$number_status'";
        $key_status = query($delete_status);
        return 'all good';
    }
    else return 'bad';
    }
    }

    //удаляет клиента
    function deleteClient($key_client){
    $get_client = "Select * From \"Client\" Where key_client = '$key_client'";
    $id_client = query_fetch_all($get_client)[0]['key_client'];
    $get_contract = "Select * from \"Contract\" where \"key_client_Client\" = '$id_client'";
    $id_contract = query_fetch_all($get_contract);
    if (!empty($id_contract)){
        $id_contract = query_fetch_all($get_contract)[0]['number_contract'];

        $delete_status = "Delete from \"Status\"
        Where \"number_contract_Contract\" = '$id_contract'";

        if (!empty($delete_status)){
            $del_status = query_fetch_all($delete_status);
            }
            if (!empty($id_client)){
                $delete_contract = "Delete from \"Contract\"
                Where \"key_client_Client\" = '$id_client'";
                $number_contract = query_fetch_all($delete_contract);

                $delete_client = "DELETE FROM \"Client\" WHERE key_client = '$id_client'";
                $del_client = query_fetch_all($delete_client);
                return 'good';
        }
        else return 'error';
    }
    else{
        if (!empty($id_client)){
            $delete_client = "DELETE FROM \"Client\" WHERE key_client = '$id_client'";
            $del_client = query_fetch_all($delete_client);
            return 'good';
            }
        }
    }

    //проверяет авторизован ли пользователь
    function showPageIfLogged($title,$content){
    if (session_status() == PHP_SESSION_NONE){
         session_start();
    }
    if (isset($_SESSION['name'])){
        render_page($title,$content);
        }
    else
    {
        render_page($title,"Вы не авторизованы");
        }
    }

    //alert
    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
        }
?>
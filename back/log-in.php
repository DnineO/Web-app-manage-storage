<?php

require_once 'database.php';
require_once 'query.php';

if (isset($_POST['name']) && !empty($_POST['name']) )
   {
    $login = $_POST["name"];
    $pass = $_POST["password"];
    echo($login);
    echo($pass);

    $db = new DB();

    $query = "
    select \"surname\"
    from \"Agent\"
    where '$login' = \"surname\" and '$pass' = \"pass\" ";
    $query_result = pg_query($db->get_link(), $query);
    $result = pg_fetch_all($query_result, PGSQL_ASSOC);

    $role = get_role($login);
    echo(var_dump($role));

    var_dump($result);
    echo(empty($result));
//    TODO: проверку админ или пользователь (готово)
    if (!empty($result)) {
        session_start();
        $_SESSION['name'] = $login;
        if ($role[0]["role_personal"] == "admin") {
            header('Location: http://localhost/admins/main_admin_page.php');
        } else {
            header('Location: http://localhost/users/main_page.php');
        }
    }
    else{
        $error = "reg error";
        header("Location: http://localhost/index.php?error=$error");
    }
}

?>
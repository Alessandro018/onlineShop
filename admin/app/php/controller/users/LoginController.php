<?php
    include "../../../../../database/Connection.php";
    $login = addslashes($_POST['login']);
    $password = addslashes($_POST['password']);
    
    $connection = new Connection();
    $getUser = $connection->query("SELECT * FROM Users WHERE login=?", [$login]);
    
    if($getUser->rowCount() > 0) {
        $user = $getUser->fetch();
        if (!password_verify($password, $user["password"]) ){
            echo json_encode(['status'=> "error", 'message'=> "Senha incorreta"]);
            return;
        }
        else{
            $_SESSION["USER"] = $user;
            echo json_encode(['status'=> "ok"]);
            return; 
        }
    }
    echo json_encode(['status'=> "error", 'message'=> "Login não existe"]);
     
?>
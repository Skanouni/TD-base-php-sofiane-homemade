<?php
    session_start();

    $username = strtolower($_POST["username"]);
    $password = $_POST["password"];

    function login($username, $password){
        if($username != "sofiane" || $password != "Kanouni"){
            $error_message = "Identifiants incorrects";
        }
    
        if(empty($username) || empty($password) ){
            $error_message = "Champs manquants";
        }
    
        if($error_message){
            $_SESSION["error"] = $error_message;
            header("Location: index.php");
            exit(); 
        }

        $_SESSION["username"] = $username;
        return header("Location: profil.php");
    }

    login($username, $password);
?>


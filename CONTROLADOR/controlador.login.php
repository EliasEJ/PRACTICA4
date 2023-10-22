<?php
require_once '../MODEL/model.php';

function comprovar(){
    $username = $_POST['username'];
    $passwordEncriptada = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $valorBoto = $_POST['boto'];

    if($valorBoto == "Login"){
        login($username, $passwordEncriptada);
    }else{
    }
}
?>
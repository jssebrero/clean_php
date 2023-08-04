<?php

/*===============================================================
    MALA PRÁCTICA: DESIGANAR MAS DE UNA SOLA TAREA A UNA FUNCIÓN
=================================================================*/
function registrarUsuariosMal(string $nombre, string $email, string $password, Date $fecha){

    if(empty($nombre) || empty($email) || empty($password) || empty($fecha)){
        return null;
    }

    $passwordSegura = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuario ... ";

}

/*==========================================================
    BUENA PRÁCTICA: DESIGANAR UNA SOLA TAREA A CADA FUNCIÓN
============================================================*/

class AjusteRegistrarUsuario{

    public $nombre; 
    public $email; 
    public $password; 
    public $fecha;

}

function registrarUsuariosBien(AjusteRegistrarUsuario $AjusteUsuario){

    if(empty($AjusteUsuario)){
        return null;
    }

    $AjusteUsuario -> password = cifrarPassword($AjusteUsuario -> password);

    crearUsuario($AjusteUsuario);    

}

function cifrarPassword(string $passwordPlana){
    return password_hash($passwordPlana, PASSWORD_DEFAULT);
}

function decifrarPassword(string $passwordPlana, string $hash){
    return password_verify($passwordPlana, $hash);
}

function crearUsuario(AjusteRegistrarUsuario $AjusteUsuario){

    //QUERY PARA CREAR EL USUARIO

}
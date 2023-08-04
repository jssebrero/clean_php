<?php

class ConfiguracionMensaje{

    public $titulo;
    public $subtitulo; 
    public $mensaje; 
    public $email; 
    public $importante = false;

}

function crearMensaje(ConfiguracionMensaje $ConfiguracionMensaje){
    //Código
    var_dump($ConfiguracionMensaje);
}

$configuracion = new ConfiguracionMensaje();
$configuracion -> titulo = "titulo";
$configuracion -> subtitulo = "subtitulo";
$configuracion -> mensaje = "Aqui va un mensaje";
$configuracion -> email = "jsebrero@jssebrero.com";

crearMensaje($configuracion);
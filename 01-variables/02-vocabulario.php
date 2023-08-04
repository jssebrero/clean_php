<?php

class Usuario{

    //DICCIONARIO DE ROLES
    const ADMINISTRADOR_ROL = 1;
    const VENDEDOR_ROL = 2;
    const ALMACENISTA_ROL = 3;

    private $id;
    private $nombre;
    private $edad;
    private $rol;

    public function __construct($id, $nombre, $edad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->rol = 1;
    }

    /* 
     RECORDAR QUE EN LAS FUNCIONES SE ESCRIBE DIRECTAMENTE LO QUE SE NECESITA PORQUE AL SER LA CLASE USUARIO SE ENTIENDE QUE TODO ES SOBRE EL USUARIO
    */
    public function obtenerId(){
        return $this->id;
    }

    public function obtenerNombre(){
        return $this->nombre;
    }

    public function obtenerEdad(){
        return $this->edad;
    }

    public function obtenerRol(){
        return $this->rol;
    }
}

#MALA PRÁCTICA GENERA MAS VARIABLES, LO QUE HACE QUE SE USE MAS RAM
$usuario = new Usuario(5,"pepe",30);
$idUsuario = $usuario->obtenerId();
$nombreUsuario = $usuario->obtenerNombre();
$edadUsuario = $usuario->obtenerEdad();

echo "El id del usuario  es: $idUsuario , el nombre del usuario es: $nombreUsuario, su edad es: $edadUsuario <br/>";

#BUENA PRÁCTICA AGREGA LEGIBILIDAD Y EVITA REDUNDANCIAS 
$usuario = new Usuario(5,"pepe",30);
echo "El id del usuario  es: {$usuario->obtenerId()}, el nombre del usuario es: {$usuario->obtenerNombre()}, su edad es: {$usuario->obtenerEdad()} <br/>";

echo $usuario->obtenerRol() == $usuario::ADMINISTRADOR_ROL ? "ADMIN" : "OTRO";

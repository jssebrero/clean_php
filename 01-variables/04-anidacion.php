<?php

function anidacion(){

$dia = "sabado";

/* if($dia){
    if(is_string($dia)){
        $dia = strtolower($dia);

        switch ($dia) {
            case 'lunes':
                return true;
            break;

            case 'martes':
                return true;
            break;

            case 'miercoles':
                return true;
            break;

            case 'jueves':
                return true;
            break;

            case 'viernes':
                return true;
            break;
            
            default:
                return false;
                break;
        }
    }
}
else{
    return false; 
} */

if(empty($dia)){
    return false; 
}

$diasLaborales = ['lunes','martes','miercoles','jueves','viernes'];

return in_array($dia,$diasLaborales, true);  

}

echo anidacion() ? "Negocio abierto" : "Negocio cerrado";
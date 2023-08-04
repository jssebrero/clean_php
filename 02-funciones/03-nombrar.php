<?php

//MALA PRÁCTICA: NO SE SABE CON CERTEZA QUE ENVIA O A DONDE
function enviar(){
    //Código
}

//BUENA PRÁCTICA: NOMBRAR LA FUNCIÓN EN BASE A LO QUE HACE
function enviarEmail(){
    //Código
}

//BUENA PRÁCTICA: INDICAR BAJO SU CONTEXTO LO QUE REALIZA LA FUNCION/MÉTODO
class Email{

    function enviar(){
        //Código
    }

}
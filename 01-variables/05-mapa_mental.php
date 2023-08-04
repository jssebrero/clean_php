<?php

#MALA PRÁCTICA
#DAR NOMBRES QUE SE CREEN SOBRE ENTENDIBLES PARA LAS COSAS HACE PARECER MAPAS MENTALES
$c = ["ciudad de mexico", "Guadalajara", "Toronto", "New York"];

for($i = 0; $i < count($c); $i++) {
    echo "Ciudad: {$c[$i]} <br/>";
}

#BUENA PRÁCTICA
#PARA SABER DE MANERA PRECISA DE QUE ESTAMOS HABLANDO, YA SEA AL ONTENER LOS DATOS DE UNA QUERY O DE UNA SERIE DE CAMPOS
$ciudades = ["ciudad de mexico", "Guadalajara", "Toronto", "New York"];

foreach($ciudades as $ciudad){
    echo "Ciudad: {$ciudad} <br/>"; 
}
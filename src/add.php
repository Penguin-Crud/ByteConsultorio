<?php

require_once 'Database.php';
require_once 'AppointmentModel.php';
//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_GET["name"], $_GET["email"], $_GET["querytitle"], $_GET["message"]) and $_GET["name"] !="" and $_GET["email"]!="" and $_GET["querytitle"]!="" and $_GET["message"]!="" ){
    //traspasamos a variables locales, para evitar complicaciones con las comillas:
$formulario = [ 
    "name" => $_GET["name"],
    "email" => $_GET["email"],
    "querytitle" => $_GET["querytitle"],
    "message" => $_GET["message"],
];
    
} else {

echo '<p>Por favor, complete el <a href="create.php">formulario</a></p>';
}


?>
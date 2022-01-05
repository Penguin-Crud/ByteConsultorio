<?php
namespace App;

use App\Controllers\AppointmentController;

$uri = $_SERVER["REQUEST_URI"];
$controller = new AppointmentController();

///////////////////
if ($uri == '/checklist' || $uri == '/')
{
    if($_POST) 
        $controller->store($_POST); 
    
    $controller -> index();
}

if ($uri == '/create')
    $controller -> create();

if ($uri == '/edit' && $_POST)
        $controller->update($_POST['id'], $_POST['message']); 
    
if($_GET)
    switch($_GET["action"]){
        case "delete":
            $controller->appointmentDelete($_GET['id']);
            $controller->index();
            break;
        case "popUp":
            $controller->mostrarPopUp($_GET['id']);
            break;
        case "edit":
            $controller->editInfo($_GET['id']);
            break;
    }
    

?>
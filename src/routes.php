<?php
namespace App;

use App\Controllers\AppointmentController;

$uri = $_SERVER["REQUEST_URI"];
$controller = new AppointmentController();


if ($uri == '/checklist' || $uri == '/')
{
    if($_POST)
    { 
        $controller->store($_POST); 
    }$controller -> index();
}

if ($uri == '/create')
{
    $controller -> create();
}

if ($uri == '/edit')
{
    if($_POST)
    { 
        $controller->update($_POST['id'], $_POST['message']); 
    }
}



if($_GET)
{
    if ($_GET["action"]=="delete")
    {
        $controller->appointmentDelete($_GET);
        $controller->index();
    }

    if ($_GET["action"]=="popUp")
    {
        $controller->mostrarPopUp($_GET['id']);
    }
    
    if ($_GET["action"]=="edit")
    {
        $controller->editInfo($_GET['id']);
    }
}
?>
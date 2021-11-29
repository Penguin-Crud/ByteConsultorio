<?php
namespace App;
use App\Controllers\AppointmentController;
use App\Core\SQLConnection;

$uri = $_SERVER["REQUEST_URI"];

/*$db = (new SQLConnection())->mysql;

$query = $db->query("select * FROM querys");

$result = $query->fetchAll();*/

$controller = new AppointmentController();

if($_POST){
    $controller->store($_POST);
}

if ($uri == '/checklist' || $uri=='/'){
    $controller -> index();
}

if ($uri == '/create'){
    $controller -> create();
}

if ($uri == '/edit'){
    $controller -> edit();
}

if ($uri == '/checklist'){
    $controller -> update();
}

if($_GET){
    if ($_GET["action"]=="delete"){
        $controller->appointmentDelete($_GET);
        $controller->index();
    }
}

?>
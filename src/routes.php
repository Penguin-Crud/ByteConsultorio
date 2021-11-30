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
    /*if(isset($_POST['edit'])){
        alert($_POST['edit']);
    }*/
    
    $controller->store($_POST);
    
    
}

if ($uri == '/checklist' || $uri == '/'){
    $controller -> index();
}

if ($uri == '/create'){
    $controller -> create();
}

if ($uri == '/edit'){
   // $controller -> edit();

}



if($_GET){
    if ($_GET["action"]=="delete"){
        $controller->appointmentDelete($_GET);
        $controller->index();
    }

    if ($_GET["action"]=="popUp"){
        $controller->mostrarPopUp($_GET['id']);
    }
    
    if ($_GET["action"]=="edit"){
        $controller->editInfo($_GET['id']);
    }
}
?>
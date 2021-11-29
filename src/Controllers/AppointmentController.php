<?php
namespace App\Controllers;

use App\Core\SQLQueryRepository;
use App\Models\AppointmentModel;


class AppointmentController {

    public function index(){

      require_once __DIR__ . "/../views/pages/checklistView.php";
      $appointment = (new AppointmentModel())->all();
      foreach ($appointment as $elementAppointment) {
          echo "
          <div class='card' style='width: 18rem;'>
            <div class='card-body'>
              <h5 class='card-title'>{$elementAppointment->name}</h5>
              <h6 class='card-subtitle mb-2 text-muted'>{$elementAppointment->email}</h6>
              <h5 class='card-title'>{$elementAppointment->title}</h5>
              <p class='card-text'> {$elementAppointment->message}</p>
            </div>
            <a >edit</a>
            <a href='?action=delete&id={$elementAppointment->id}'>delete</a>
          </div>    
          ";
        }
         require_once __DIR__ . "/../views/components/footerChecklist.php";
    }
    public function create(){
        require_once __DIR__ . "/../views/pages/createView.php";
        
    }
    public function edit(){
        require_once __DIR__ . "/../views/pages/editView.php";
        
          }
      
    public function update(){
        require_once __DIR__ . "/../views/pages/checkListView.php";
    }

    public function store($request){
      $appointmentToSave = new AppointmentModel($request);
      $appointmentToSave->save();
      $this->redirect('/');
    }

    private function redirect(string $url)
    {
      header("Location:{$url}");
    }

    public function appointmentDelete ($request){
      $appointmentDelete = new SQLQueryRepository();
      $appointmentDelete -> delete ($request['id']);
    }
}
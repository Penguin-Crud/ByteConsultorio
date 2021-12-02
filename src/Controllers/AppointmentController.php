<?php
namespace App\Controllers;

use App\Core\SQLQueryRepository;
use App\Models\AppointmentModel;

class AppointmentController 
{
    private function redirect(string $url)
    {
      header("Location:{$url}");
    }

    public function index()
    {
      $appointment = (new AppointmentModel())->all();
      require_once __DIR__ . "/../views/pages/listaConsultas.php";
    }

    public function create()
    {
      require_once __DIR__ . "/../views/pages/createView.php";
    }

    public function edit()
    {
      require_once __DIR__ . "/../views/pages/editView.php";
    }



    public function store($request)
    {
      $appointmentToSave = new AppointmentModel($request);
      $appointmentToSave->save();
      $this->redirect('/');
    }

    public function mostrarPopUp ($id)
    {
      $SQLQueryRepository = new SQLQueryRepository();
      $dataConsulta = $SQLQueryRepository->getDataById($id);
      require_once __DIR__ . '/../views/pages/popUp.php';
    }

    

    public function appointmentDelete ($request)
    {
      $appointmentToDelete = new SQLQueryRepository();
      $appointmentToDelete -> delete ($request['id']);
      $this->redirect('/');
    }

    public function editInfo ($id)
    {
      $idConsulta = (new AppointmentModel())->getDataById($id);
      require_once __DIR__ . '/../views/pages/editView.php';
    }

    public function update($id, $message) 
    {
      (new AppointmentModel()) -> update($id, $message);
      $this->redirect('/');
    }
}

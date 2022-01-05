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
      $dataConsulta = (new AppointmentModel())->getDataById($id);
      require_once __DIR__ . '/../views/pages/popUp.php';
    }

    public function appointmentDelete ($id)
    {
      $data = (new AppointmentModel())->getDataById($id);
      $data->delete();
      $this->redirect('/');
    }

    public function editInfo ($id)
    {
      $idConsulta = (new AppointmentModel())->getDataById($id);
      require_once __DIR__ . '/../views/pages/editView.php';
    }

    public function update($id, $message) 
    {
      $data = (new AppointmentModel()) -> getDataById($id);
      $data->setMessage($message);
      $data->update();
      $this->redirect('/');
    }
}

<?php
namespace App\Models;   
use App\Core\FakeQueryRepository;
use App\Core\SQLQueryRepository;

class AppointmentModel {
    public ?int $id= null;
    public $name;
    public $email;
    public $title;
    public $message;

    private $db;
    
    public function __construct($data = null)
     {
        if ($data) {
            $this->id = isset($data['id']) ? $data['id'] : null;
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->title = $data['title_query'];
            $this->message = $data['problem_query'];
        }
        
        $this->db = new SQLQueryRepository();

     }
    public function all(){
        $appointmentList = [];
        foreach($this->db->getAll() as $appointment) {
            array_push($appointmentList, new self ($appointment));
        }
        return $appointmentList;
    }
   
    public function save()
    {
       $this->db->save( $this->name, $this->email, $this->title, $this->message );
    }
}

///this es objeto
////self es clase
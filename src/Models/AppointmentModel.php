<?php
namespace App\Models;   

use App\Core\SQLQueryRepository;
use App\Core\IQueryRepository;
class AppointmentModel
{
    public ?int $id= null;
    public $name;
    public $email;
    public $title;
    public $message;
    public $created_at;

    private IQueryRepository $db;
    
    public function __construct($data = null)
    {
        if ($data) {
            $this->id = isset($data['id']) ? $data['id'] : null;

            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->title = $data['title_query'];
            $this->message = $data['problem_query'];
            $this->created_at = $data['created_at'];
        }

        $this->db = new SQLQueryRepository();
    }

    public function all():array
    {
        $appointmentList = [];
        foreach($this->db->getAll() as $appointment) 
        {
            array_push($appointmentList, new self ($appointment));
        } 
        
        return $appointmentList;
    }
   
    public function delete():void
    {
        $this->db->delete($this->id);
    }

    public function save():void
    {
       $this->db->save( $this->name, $this->email, $this->title, $this->message );
    }
    
    public function getDataById($id): self
    {
        return new self($this->db->getDataById($id));
    }

    public function setMessage($message): void
    {
        $this->message = $message;
    }

    public function update() 
    {
        $this->db->update($this->id, $this->name, $this->email, $this->title, $this->message);
    }
}
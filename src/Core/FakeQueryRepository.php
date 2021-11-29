<?php
namespace App\Core;
class FakeQueryRepository implements IQueryRepository {
    public $appointments = [
        [ 'id'=> 1,
        'name' => 'Biplop',
        'email' => 'biplop@biplop.com',
        'title_query'=>'hola',
        'problem_query' => 'tengo un problema',
        'created_at'=>'2021/11/22 09:17:00 am'
        ],
        ];

        public function getAll() {
        return $this->appointments;
        }
        function save($name, $email, $title, $message){}
}


    /* public function create($name, $email,$querytitle,$message){
    self::$id++;
    $datetime = date("Y-m-d h:i:sa");
    array_push(self::$appointments, [
    'id' => self::$id,
    'name' => $name,
    'email' => $email,
    'querytitle' => $querytitle,
    'message' => $message,
    'datetime' => $datetime
    ]
    );
    }*/
 
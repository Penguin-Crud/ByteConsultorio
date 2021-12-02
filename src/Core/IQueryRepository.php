<?php

namespace App\Core;

interface IQueryRepository 
{
    function getAll();
    function save($name, $email, $title, $message);
    function getDataById($id);
    function update($id, $name, $email, $title, $message);
}

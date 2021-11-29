<?php

namespace App\Core;

interface IQueryRepository {

    function getAll();
    function save($name, $email, $title, $message);
}

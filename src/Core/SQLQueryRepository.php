<?php

namespace App\Core;

class SQLQueryRepository implements IQueryRepository {

        private $table = "querys";
        private $connection;

        function __construct(){
            $this->connection = (new SQLConnection())->mysql;
        }


        function getAll(){
            $query = $this->connection->query("select * FROM {$this->table}");
            $result = $query->fetchAll();
            return $result;
        }
        function getDataById($id) {
            $query = $this->connection->query("SELECT * FROM `{$this->table}` WHERE `{$this->table}` . `id` = {$id}");
            $result = $query->fetchAll()[0];
            return $result;
        }



        function save($name, $email, $title, $message)
        {
            $this->connection->query("INSERT INTO `{$this->table}` (`name`,`email`,`title_query`,`problem_query`) VALUES ('{$name}','{$email}','{$title}','{$message}')");

        }

        function delete($id){
            $this->connection->query("DELETE FROM `{$this->table}` WHERE `{$this->table}` . `id` = {$id}");
        }

        function update($id, $message)
        {
            $this->connection->query(

                "UPDATE `{$this->table}` 
                 SET `problem_query`='{$message}' 
                 WHERE `{$this->table}` . `id` = {$id}"
            );
        } 
}
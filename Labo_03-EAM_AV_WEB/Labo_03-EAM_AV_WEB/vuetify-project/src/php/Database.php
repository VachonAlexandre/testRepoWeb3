<?php

class Database
{
    private static $instance;
    private $connection;

    private function __construct(){
        $this -> connection =  new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this -> connection;
    }
}


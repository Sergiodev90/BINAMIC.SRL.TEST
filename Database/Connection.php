<?php

namespace Database;


class Connection{
    private static $instance;
    private $connection;

    private function __construct(){
         $this->make_connection();
    }

    public static function get_instance(){   
        if(!self::$instance instanceof self)
            self::$instance = new self();

        return self::$instance;
    }

    public function get_database_instance(){
        return  $this->connection;    
    }
 
    private function make_connection(){
        $hostname = 'localhost';
        $username = 'root';
        $password = 'Guimaster90**';
        $database = 'binamic_prova';

        $mysql = new \mysqli($hostname, $username, $password, $database);

        $setnames = $mysql->prepare("SET NAMES 'utf8'");
        $setnames->execute();
        $this->connection = $mysql;
    }
}

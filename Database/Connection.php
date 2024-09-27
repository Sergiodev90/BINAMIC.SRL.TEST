<?php

namespace Database;

use Error;

class Connection{
    private static $instance;
    private $connection;

    private function __construct(){
        return $this->make_connection();
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
        $hostname = '127.0.0.1';
        $username = 'root';
        $password = '40580024';
        $database = 'binamic_prove';

        $mysql = new \mysqli($hostname, $username, $password, $database);
        
        if($mysql->connect_error){
            error_log('Connection Error:' .$mysql->connect_error);
        }else{
            echo "Everithing is working very well";
        }
        $setnames = $mysql->prepare("SET NAMES 'utf8'");
        $setnames->execute();
        $this->connection = $mysql;
    }
}

$connection = Connection::get_instance();

$connection->get_database_instance();
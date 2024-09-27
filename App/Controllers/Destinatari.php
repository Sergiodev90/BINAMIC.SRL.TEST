<?php

namespace Controllers;
use Database\Connection;

class Destinatari{
    private $connection;
    public function  __construct(){   
        $this->connection = Connection::get_instance()->get_database_instance();
    }

    public function index(){
        $stmt = $connection->prepare("S")
    }
    public function create(){

    }
    public function store(array $array_parameters){

    }
    public function show(){
        
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){
             
    }

}


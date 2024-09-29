<?php

namespace App\Controllers;

use Database\Connection;

class Destinatari{
    private $connection;
    public function  __construct(){   
        $this->connection = Connection::get_instance()->get_database_instance();
    }

    public function index(){
        $stmt = $this->connection->prepare("SELECT * FROM Destinatari");
        $stmt->execute();
        $results= $stmt->get_result();

        $data = $results->fetch_all();

        return $data;
    }
    public function create(){
        return '
        <form action="/submit.php" method="POST">
            <label for="nome">Nombre:</label>
            <input type="text" name="nome" required>
                
            <label for="cognome">Apellido:</label>
            <input type="text" name="cognome" required>

            <label for="indirizzo">Dirección:</label>
            <input type="text" name="indirizzo" required>

            <label for="cap">Código Postal:</label>
            <input type="text" name="cap" required>

            <label for="comune">Comuna:</label>
            <input type="text" name="comune" required>

            <label for="provincia">Provincia:</label>
            <input type="text" name="provincia" required>

            <input type="submit" value="Crear">
        </form>
    ';
    }
    // public function store(array $array_parameters){

    // }
    // public function show(){
        
    // }
    // public function edit(){

    // }
    // public function update(){

    // }
    // public function destroy(){
             
    // }

}


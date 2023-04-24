<?php

namespace App;

use PDOException;

Class Connection{

    public function Conect(){
        try{
            $conn = new \PDO(
                "mysql:host=localhost;dbname=portifolio",
                "root",
                ""
            );
            return $conn;

        }catch(PDOException $e){
            echo"Erro ao conectar ao servidor".$e->getMessage();
        }

    }
}
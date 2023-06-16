<?php

class Conexion
{
    public $db;
    private $driver = "mysql";
    private $host = "localhost";
    private $namedb = "notas2023";
    private $user = "root";
    private $password = "";



    public function __construct()
    {
        try{
             $this->db = new PDO("{$this->driver}:host={$this->host};dbname={$this->namedb}", $this->user,$this->password);
                 
             $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
               echo 'conexion realizada';
            }catch(PDOEXCEPTION $e){
          echo 'no se puede realizar la conexion'.$e->getMessage();
        }
    }
}


?>
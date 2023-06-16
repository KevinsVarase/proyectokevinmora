<?php
include_once('../../conexion.php');
class Administrador extends Conexion
{
    
    public function __construct(){
        $this->db = parent::__construct();
    }

    //funcion para registrar los usuarios 

    public function addadmi($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu);   
    {
        //crear la sentencia sql
        $statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu, Apellidosusu, usuario, passwordu, perfil, estado)VALUES(:Nombreusu, :Apellidosusu, :Usuariousu, :Passwordusu, :'Administrador', :'Activo')");

        $statement->bindParam(':Nombreusu',$Nombreusu);
        $statement->bindParam(':Apellidousu',$Apellidousu);
        $statement->bindParam(':Usuariousu',$Usuariousu);
        $statement->bindParam(':Passwordusu',$Passwordusu);
        $statement->bindParam(':Perfil',$Perfil);
        $statement->bindParam(':Estadousu',$Estadousu);
        if ($statement->execute())
        {
            echo "Registrado con exito ";
            header(location: '../paginas/index.php');
        }else
        {
            echo "Ocurrio un error ";
            header(location: '../paginas/agregar.php');
        }

    }

    //funcion para consultar todos los usuarios administradores

    public function getadmin()
    {

    }

    //funcion para consultar el usuario de acuerdo a su id
    public function getidad($Id)
    {

    }

    //funcion actualizar los datos del usuario 
    public function updatead($Id,$Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Estadousu)
    {

    }
    //funcion para eliminar un usuario
    public function deletead($Id)
    {

    }



}


?>
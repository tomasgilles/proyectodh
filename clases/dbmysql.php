<?php

/**
 *
 */

include "db.php";

class DbMySQL extends Db
{
  private $db;

  function __construct(argument)
  {
    $dsn = "mysql:host=127.0.0.1;dbname=movies_db;port=3306";
    $user = "root";
    $pass = ""; //Que pasa con las computadoras que tienen usuario y contraseña distintos?

    try {
      $this->db = new PDO($dsn, $user, $pass); // resuelve la conexion
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // para poder ver errores que devuelve SQL
    } catch (\Exception $e) {
      var_dump($e->getMessage()); exit;
    }
  }

  public function guardarUsuario(Usuario $user, string $file=null){
    $consulta = $this->db->prepare("INSERT VALUES usuarios VALUES (default, :nombre, :apellido, :email, :pass)");
    $consulta->bindValue(':nombre', $user->getName());
    $consulta->bindValue(':apellido', $user->getApellido());
    $consulta->bindValue(':email', $user->getEmail());
    $consulta->bindValue(':pass', $user->getPass());
    $consulta->execute();


  }

  public function buscarUsuarioPorMail(string $email){
    $consulta = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email");
    $consulta->bindValue(':email', $email);
    $consulta->execute();

    $usuarioArray = $consulta->fetch(PDO::FETCH_ASSOC);

    if ($usuarioArray) {
      $usuario = new Usuario ($usuarioArray)
    } else {
      $usuario = NULL;
    }
    return $usuario;
  }

}


?>

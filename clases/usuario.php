<?php

/**
 *
 */
class Usuario
{
  private $id;
  private $nombre;
  private $apellido;
  private $email;
  private $pass;

  function __construct(Array $array)
  {
    //2 origines de datos: 1ero, desde el formulario de registro.
    //2do, desde la base de datos.
    global $json;

    if (!isset($array["id"])) { //vengo del registro --> no tengo Id ni contraseña hasheada
      $this->id = $json->nextId();
      $this->pass = password_hash($array["pass"], PASSWORD_DEFAULT);
    } else { // vengo de la base de datos --> tengo todos los datos
      $this->id = $array["id"];
      $this->pass = $array["pass"];
    }
    $this->nombre = $array["nombre"];
    $this->apellido = $array["apellido"];
    $this->email = $array["email"];
  }

  public function getId(){
    return $this->id;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function getEmail(){
    return $this->email;
  }

  public function getPass(){
    return $this->pass;
  }

}





?>

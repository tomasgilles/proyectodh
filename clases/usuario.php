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
  private $contrasenia;

  function __construct($array)
  {
    global $json;
    $this->id = $json->nextId();
    $this->nombre = $_POST["nombre"];
    $this->apellido = $_POST["apellido"];
    $this->email = $_POST["email"];
    $this->contrasenia = password_hash($_POST["pass"], PASSWORD_DEFAULT);
  }
}





?>

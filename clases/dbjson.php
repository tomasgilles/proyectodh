<?php

/**
 *
 */
include "db.php";

class DbJson extends Db
{
  private $json;

  // CONSTRUCTOR
  function __construct(string $file)
  {
    if (!file_exists($file)) {
      $this->json = ["usuarios"=>[]];
    } else {
      $this->json = file_get_contents($file);
    }
  }

  // METODOS
  public function guardarUsuario(Usuario $user,string $file = null){
    $array = json_decode($this->json, true);

    $usuario = [
      "id" => $user->getId(),
      "nombre" => $user->getNombre(),
      "apellido" => $user->getApellido(),
      "email" => $user->getEmail(),
      "pass" => $user->getPass(),
    ];


    $array["usuarios"][] = $usuario;

    $json_final = json_encode($array, JSON_PRETTY_PRINT);
    file_put_contents($file, $json_final);
  }

  public function buscarUsuarioPorMail($email){
    $array = json_decode($this->json, true);

    foreach ($array["usuarios"] as $usuario) {
      if ($usuario["email"] == $email) {
        // return $usuario;
        $user = new Usuario($usuario);
        return $user; //Retorna un objeto tipo Usuario
      }
    }
    return null;
  }

  public function nextId(){
    $array = json_decode($this->json, true);

    $lastUser = array_pop($array["usuarios"]);
    $nextId = $lastUser["id"] + 1;

    return $nextId;
  }

}

?>

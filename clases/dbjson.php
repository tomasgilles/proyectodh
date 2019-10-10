<?php

/**
 *
 */
class DbJson
{
  private $json;

  // CONSTRUCTOR
  function __construct($file)
  {
    if (!file_exists($file)) {
      $this->json = "";
    } else {
      $this->json = file_get_contents($file);
    }
  }

  // METODOS
  public function guardarUsuario($user, $file){
    $array = json_decode($this->json, true);
    $array["usuarios"][]=$user;
    $json_final = json_encode($array, JSON_PRETTY_PRINT);
    file_put_contents($file, $json_final);
  }

  public function buscarUsuarioPorMail($email){
    $array = json_decode($this->json, true);

    foreach ($array["usuarios"] as $usuario) {
      if ($usuario["email"] == $email) {
        return $usuario;
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

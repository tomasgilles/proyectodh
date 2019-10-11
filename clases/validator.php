<?php

/**
 *
 */
class Validator
{

  public static function validarRegistro($datos){
    global $json;

    $errores = [];

    $datosFinales = [];

    foreach($datos as $key => $value){
      if ($key == "nombre" || $key == "apellido" || $key == "email"){
        $datosFinales[$key] = trim($value);
      }
    }

    if (!ctype_alpha($datosFinales["nombre"])){
      $errores["nombre"]="Ingrese caracteres alfabeticos";
    }

    if (!ctype_alpha($datosFinales["apellido"])){
      $errores["apellido"]="Ingrese caracteres alfabeticos";
    }

    if ($json->buscarUsuarioPorMail($datosFinales["email"])) {
      $errores["email"] = "Ya existe un usuario con este email. Por favor elija otro.";
    }

    if (strlen($datos["pass"])<4) {
      $errores["pass"]="La contraseña debe tener por lo menos 4 caracteres";
    }

    if ($datos["pass"]!=$datos["pass2"]) {
      $errores["pass2"]="Las contraseñas no coinciden";
    }

   return $errores;
  }





  public static function validarLogin($datos){
    global $json;

    $errores=[];

    // Email
    if(strlen($datos["email"])==0) {
      $errores["email"]= "Por favor ingrese su email";
    } else if (!$json->buscarUsuarioPorMail($datos["email"])) {
      $errores["email"]= "El usuario no existe. Por favor regístrese.";
    }

    // Contraseña
    if (strlen($datos["pass"])==0) {
      $errores["pass"]= "Por favor ingrese su contraseña";
    } else if($json->buscarUsuarioPorMail($datos["email"])){
        $usuario = $json->buscarUsuarioPorMail($datos["email"]);

        if (!password_verify($datos["pass"], $usuario->getPass()) ) {
        $errores["pass"] = "La contraseña ingresada es incorrecta";
      }
    }
    return $errores;
  }



}
?>

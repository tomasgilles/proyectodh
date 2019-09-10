<?php
function validarRegistro($datos){
  $errores=[];
  $datosFinales=[];
  foreach($datos as $key => $value){
    $datosFinales[$key] = trim($value);
  }

  // VALIDAR

  // NOMBRE
  if (strlen($datos["name"])==0) {
    $errores["name"]="Complete su nombre";
  } else if (!ctype_alpha($datosFinales["name"])){
    $errores["name"]="Ingrese caracteres alfabeticos";
  }

  // EMAIL
  if (strlen($datosFinales["email"])==0) {
    $errores["email"]="Ingrese su email";
  } else if (filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL)==false) {
    $errores["email"]="Ingrese un email valido";
  }

  // PASSWORD
  if (strlen($datosFinales["pass"])<4) {
    $errores["pass"]="La contraseña debe tener por lo menos 4 caracteres";
  }

  // CONFIRMAR PASSWORD
  if ($datosFinales["pass"]!=$datosFinales["pass2"]) {
    $errores["pass2"]="Las contraseñas no coinciden";
  }

 return $errores;
}
?>

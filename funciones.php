<?php
function validarRegistro($datos){
  $errores=[];
  $datosFinales=[];
  foreach($datos as $key => $value){
    $datosFinales[$key] = trim($value);
  }
  if(strlen($datosFinales["pass"]) < 7){
   $errores["pass"] = "La contrasenia debe tener al menos 7 caracteres";
 }
  if (($datosFinales["pass2"]) != $datosFinales["pass"]){
    $errores["pass2"] = "La contrasenia debe ser la misma";
 }
 return $errores;
}
?>

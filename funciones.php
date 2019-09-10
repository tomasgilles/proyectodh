<?php


// VALIDAR
function validarRegistro($datos){
  $errores=[];
  $datosFinales=[];
  foreach($datos as $key => $value){
    while ($key != ("pass" && "pass2")){
      $datosFinales[$key] = trim($value);
    }
  }

  if (!ctype_alpha($datosFinales["nombre"])){
    $errores["nombre"]="Ingrese caracteres alfabeticos";
  }

  if (!ctype_alpha($datosFinales["apellido"])){
    $errores["apellido"]="Ingrese caracteres alfabeticos";
  }

  if (strlen($datosFinales["pass"])<4) {
    $errores["pass"]="La contraseña debe tener por lo menos 4 caracteres";
  }

  if ($datosFinales["pass"]!=$datosFinales["pass2"]) {
    $errores["pass2"]="Las contraseñas no coinciden";
  }

 return $errores;
}



// CREAR usuario
function armarUsuario(){
  return [
    "nombre" => trim($_POST["nombre"]),
    "apellido" => trim($_POST["apellido"]),
    "email" => trim($_POST["email"]),
    "contraseña" => password_hash($_POST["pass"],PASSWORD_DEFAULT)
  ];
}

// GUARDAR USUARIO
function guardarUsuario($user){
  $json = file_get_contents("usuarios.json");
  $array = json_decode($json, true);
  $array["usuarios"][]=$user;
  $json_final = json_encode($array);
  file_put_contents("usuarios.json", $json_final);
}






?>

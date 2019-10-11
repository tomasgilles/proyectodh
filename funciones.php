<?php
// session_start();


// VALIDAR
function validarRegistro($datos){
  $errores=[];
  $datosFinales=[];
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

  if (buscarUsuarioPorMail($datosFinales["email"])) {
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

// function nextId(){
//   $json = file_get_contents("usuarios.json");
//   $array = json_decode($json, true);
//
//   $lastUser = array_pop($array["usuarios"]);
//   $nextId = $lastUser["id"] + 1;
//
//   return $nextId;
// }


// CREAR usuario
// function armarUsuario(){
//   return [
//     "id" => nextId(),
//     "nombre" => trim($_POST["nombre"]),
//     "apellido" => trim($_POST["apellido"]),
//     "email" => trim($_POST["email"]),
//     "contrasenia" => password_hash($_POST["pass"],PASSWORD_DEFAULT)
//   ];
// }

// GUARDAR USUARIO
// function guardarUsuario($user){
//   $json = file_get_contents("usuarios.json");
//   $array = json_decode($json, true);
//   $array["usuarios"][]=$user;
//   $json_final = json_encode($array, JSON_PRETTY_PRINT);
//   file_put_contents("usuarios.json", $json_final);
// }


// LOGIN

function validarLogin($datos){
  $errores=[];

  // Email
  if(strlen($datos["email"])==0) {
    $errores["email"]= "Por favor ingrese su email";
  } else if (!buscarUsuarioPorMail($datos["email"])) {
    $errores["email"]= "El usuario no existe. Por favor regístrese.";
  }

  // Contraseña
  if (strlen($datos["pass"])==0) {
    $errores["pass"]= "Por favor ingrese su contraseña";
  } else {
    $usuario = buscarUsuarioPorMail($datos["email"]);
    if (!password_verify($datos["pass"], $usuario["contrasenia"])) {
      $errores["pass"] = "La contraseña ingresada es incorrecta";
    }
  }
  return $errores;
}


function buscarUsuarioPorMail($email){
  $json = file_get_contents("usuarios.json");
  $array = json_decode($json, true);

  foreach ($array["usuarios"] as $usuario) {
    if ($usuario["email"] == $email) {
      return $usuario;
    }
  }
  return null;
}

function loguearUsuario(){
  $_SESSION["email"] = $_POST["email"];

  // if (isset($_POST["rememberMe"])) {
  //   setcookie("email", $email, time()+60*60);
  // }
}

function usuarioLogueado(){
  return isset($_SESSION["email"]);
}

?>

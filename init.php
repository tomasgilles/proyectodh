<?php

include "clases/dbjson.php";
include "clases/usuario.php";
include "clases/validator.php";
include "clases/auth.php";

$auth = new Auth;

$file = "usuarios.json";
$json = new DbJson($file);




?>

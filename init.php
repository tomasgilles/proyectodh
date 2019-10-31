<?php

include "clases/dbjson.php"; //eliminar cuando pase a base de datos mysql
include "clases/usuario.php";
include "clases/validator.php";
include "clases/auth.php";
// inclue "clases/dbmysql.php";

$auth = new Auth;

$file = "usuarios.json";
$json = new DbJson($file);




?>

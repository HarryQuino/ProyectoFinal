<?php
$servidor ="localhost";
$usuario = "root";
$clave = "";
$cn = mysqli_connect($servidor, $usuario, $clave);
mysqli_select_db($cn,"todolist") ;


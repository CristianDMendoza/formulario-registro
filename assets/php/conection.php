<?php
/*Parametro de conexion*/
$host= "localhost";
$user = "root";
$db = "registro";

/*Variable de conexion*/
$conection = mysqli_connect($host,$user,'',$db);

$err = "Ha ocurrido un error en la base de datos";
if($conection !=true){
    mysqli_error($conection);
}
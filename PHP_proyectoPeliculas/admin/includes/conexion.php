<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$nombre_bd = "marvel_uniempresarial";

$conexion = mysqli_connect($servidor, $usuario, $clave, $nombre_bd);

if(!$conexion){
    die("Conexion fallo:". mysqli_connect_error());
}
// else{
//     echo "Conexión exitosa";
// }
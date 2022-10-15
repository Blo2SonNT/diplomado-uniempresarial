<?php
require_once '../config.php';
require_once '../admin/includes/conexion.php';
$formulario_valido = true;

if(empty($_POST['inputCorreoLogin'])){
    $formulario_valido = false;
    echo "El correo es obligatorio";
    return;
}

if(empty($_POST['inputClaveLogin'])){
    $formulario_valido = false;
    echo "El correo es obligatorio";
    return;
}

if($formulario_valido){
    $correo = $_POST['inputCorreoLogin'];
    $clave = $_POST['inputClaveLogin'];
    $sql = "SELECT * FROM tb_usuarios WHERE correo = '$correo' AND clave = '$clave' LIMIT 1";
    $resultado = mysqli_query($conexion, $sql);
    $resultado = mysqli_fetch_object($resultado);
    if($correo == $resultado->correo && $clave == $resultado->clave) {
        session_start();
        $url_redireccion = URL_WEB.'/?acceso=true';
        $_SESSION['correo'] = $resultado->correo;
        header('Location: '.$url_redireccion);

    }
}
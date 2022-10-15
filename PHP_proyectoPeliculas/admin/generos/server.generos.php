<?php
require_once '../includes/conexion.php';
$formulario_valido = true;

if(empty($_POST['inputNombreGenero'])){
    $formulario_valido = false;
    echo "el nombre del genero esta vacio";
    return;
}

if(empty($_POST['inputUrlImagenGenero'])){
    $formulario_valido = false;
    echo "la url del genero esta vacio";
    return;
}

if($formulario_valido == true){
    $query_sql = "INSERT INTO tb_generos (nombre, url_imagen) VALUES ('".$_POST['inputNombreGenero']."', '".$_POST['inputUrlImagenGenero']."')"; 
    if(mysqli_query($conexion, $query_sql)){
        header('Location: index.php');
    }else{
        echo "Error: $query_sql <br>".mysqli_error($conexion);
    }
}
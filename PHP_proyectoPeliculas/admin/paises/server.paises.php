<?php
require_once '../includes/conexion.php';
if(empty($_POST['inputNombrePais'])){
    echo "el nombre del paisesta vacio";
    return;
}else{
    $query_sql = "INSERT INTO tb_paises (nombre) VALUES ('".$_POST['inputNombrePais']."')"; 
    if(mysqli_query($conexion, $query_sql)){
        header('Location: index.php');
    }else{
        echo "Error: $query_sql <br>".mysqli_error($conexion);
    }
}
<?php
require_once '../../config.php';
require_once '../includes/conexion.php';
$formulario_valido = true;

if(!isset($_GET['eliminar'])){
    if (empty($_POST['inputNombreGenero'])) {
        $formulario_valido = false;
        echo "el nombre del genero esta vacio";
        return;
    }
    
    if (empty($_POST['inputUrlImagenGenero'])) {
        $formulario_valido = false;
        echo "la url del genero esta vacio";
        return;
    }
}


if (isset($_GET['actualizacion'])) {

    if($formulario_valido){

        $nombre_actualizacion = $_POST['inputNombreGenero'];
        $url_imagen_input = $_POST['inputUrlImagenGenero'];
        $id_registro_para_actualizar = $_POST['idRegistro'];

        $update_genero = "UPDATE tb_generos SET nombre = '$nombre_actualizacion', url_imagen = '$url_imagen_input' WHERE id_registro = $id_registro_para_actualizar";
        if(mysqli_query($conexion, $update_genero)){
            header('Location:'.URL_WEB.'/admin/generos/?actualizado=true');
        }else{
            echo "error al actualizar";
        }
    }

}elseif(isset($_GET['eliminar'])){
    $sql_eliminar_genero = "DELETE FROM tb_generos WHERE id_registro = ".$_GET['id'];
    if(mysqli_query($conexion, $sql_eliminar_genero)){
        header('Location:'.URL_WEB.'/admin/generos/?eliminado=true');
    }else{
        echo "error al actualizar";
    }
} else {
    if ($formulario_valido == true) {
        $query_sql = "INSERT INTO tb_generos (nombre, url_imagen) VALUES ('" . $_POST['inputNombreGenero'] . "', '" . $_POST['inputUrlImagenGenero'] . "')";
        if (mysqli_query($conexion, $query_sql)) {
            header('Location: index.php');
        } else {
            echo "Error: $query_sql <br>" . mysqli_error($conexion);
        }
    }
}

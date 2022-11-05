<?php
require_once '../../config.php';
require_once '../includes/conexion.php';
$formulario_valido = true;
/*
Array
(
    [inputNombrePais] => Temporibus quisquam 
    [inputFecEstreno] => 2015-10-17
    [inputDirector] => Officiis tempore mi
    [ListaOpcionesFilme] => 1
    [listaGeneros] => 1
    [inputClasificacion] => Est quia consequatur
    [inputImagen] => Quod vero iste totam
)

*/
if (empty($_POST['inputNombrePais'])) {
    echo "El campo nombre es requerido";
    $formulario_valido = false;
    return;
}
if (empty($_POST['inputFecEstreno'])) {
    echo "El campo fecha de estreno es requerido";
    $formulario_valido = false;
    return;
}
if (empty($_POST['inputDirector'])) {
    echo "El campo director es requerido";
    $formulario_valido = false;
    return;
}
if (empty($_POST['ListaOpcionesFilme'])) {
    echo "Seleccione una opcion de la lista de tipos de filme";
    $formulario_valido = false;
    return;
}
if (empty($_POST['listaGeneros'])) {
    echo "Seleccione un genero";
    $formulario_valido = false;
    return;
}
if (empty($_POST['inputClasificacion'])) {
    echo "El campo clasificacion es requerido";
    $formulario_valido = false;
    return;
}
if (empty($_POST['inputImagen'])) {
    echo "El campo de la imagen es requerido";
    $formulario_valido = false;
    return;
}


if($formulario_valido){
    $nombre = $_POST['inputNombrePais'];
    $fec_estreno = $_POST['inputFecEstreno'];
    $director = $_POST['inputDirector'];
    $id_tipo_video = $_POST['ListaOpcionesFilme'];
    $clasificacion = $_POST['inputClasificacion'];
    $id_genero = $_POST['listaGeneros'];
    $url_imagen = $_POST['inputImagen'];

    $query_registro_filme = "INSERT INTO tb_peliculas_series 
        (nombre, fec_estreno, director, id_tipo_video, clasificacion, id_genero, url_imagen)
        VALUES ('$nombre', '$fec_estreno', '$director', $id_tipo_video, '$clasificacion', $id_genero, '$url_imagen')
    ";
    if(mysqli_query($conexion, $query_registro_filme)){
        header('Location:'.URL_WEB.'/admin/peliculas-series/?actualizado=true');
    }else{
        echo "error al actualizar";
    }
}
<?php
require_once "../config.php";
require_once '../admin/includes/conexion.php';
$formulario_valido = true;

function texto_aleatorio($longitud_cadena){
    $cadena = "";
    $caracteres = "123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJ*#@";
    $cantidad_carecteres_var = strlen($caracteres)-1;
    for ($contructor_cadena=0; $contructor_cadena <= ($longitud_cadena-1) ; $contructor_cadena++) { 
        $cadena .= $caracteres[rand(0, $cantidad_carecteres_var)];
    }
    return $cadena;

}
//#dH2om5p43l6bIj

if(!empty($_POST['inputRecuperacionCorreo'])){
    $clave_nueva = texto_aleatorio(15);
    $correo_recuperacion = $_POST['inputRecuperacionCorreo'];
    $clave = password_hash($clave_nueva, PASSWORD_DEFAULT);
    $sql_data_existe = "SELECT id_registro FROM tb_usuarios WHERE correo = '$correo_recuperacion' LIMIT 1";
    $resultado_existe_registro = mysqli_query($conexion, $sql_data_existe);
    $resultado_existe_registro = mysqli_fetch_object($resultado_existe_registro);

    if($resultado_existe_registro != null){
        $sql_actualiza_clave = "UPDATE tb_usuarios SET clave = '$clave' WHERE id_registro = $resultado_existe_registro->id_registro";
        mysqli_query($conexion, $sql_actualiza_clave);
        $asunto = "Recuperar clave";
        $mensaje = "Este correo se envia por solicitud de recuperación de clave para la pagina de series y peliculas de marvel \n Su clave nueva es: $clave_nueva";
        echo $clave_nueva;
        // mail($correo_recuperacion, $asunto, $mensaje);
    }else{
        header("Location:".URL_WEB."/login/olvido-clave.php?errorFormulario=1");
    }
}else{
    header("Location:".URL_WEB."/login/olvido-clave.php?errorFormulario=true");
}


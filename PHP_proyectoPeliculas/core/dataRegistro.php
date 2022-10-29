<!-- <pre> -->
<?php
require_once '../config.php';
require_once '../admin/includes/conexion.php';
$formulario_valido = true;

/*
Array
(
    [inputNombreRegistro] => Quis nostrum laborum
    [inputApellidoRegistro] => Odit consectetur sit
    [inputCorreoRegistro] => jovixe@mailinator.com
    [inputEdadRegistro] => 67
    [checkGenero3] => 
    [checkGenero4] => 
    [selectPaisRegistro] => 5
    [inputPassRegistro] => Pa$$w0rd!
    [inputVerPassRegistro] => Pa$$w0rd!
    [checkTYC] => on
)

*/


if (empty($_POST['inputNombreRegistro'])) {
    echo "el nombre esta vacio";
    $formulario_valido = false;
    return;
}

if (empty($_POST['inputApellidoRegistro'])) {
    echo "el apellido es obligatorio";
    $formulario_valido = false;
    return;
}

if (empty($_POST['inputCorreoRegistro'])) {
    echo "el correo es obligatorio";
    $formulario_valido = false;
    return;
}

if (empty($_POST['inputEdadRegistro'])) {
    echo "la edad es obligatoria";
    $formulario_valido = false;
    return;
}

if (empty($_POST['selectPaisRegistro']) || !isset($_POST['selectPaisRegistro'])) {
    echo "el pais es obligatorio";
    $formulario_valido = false;
    return;
}


if (empty($_POST['inputPassRegistro'])) {
    echo "La contraseña es obligatoria";
    $formulario_valido = false;
    return;
}

if (empty($_POST['inputVerPassRegistro'])) {
    echo "Verifique su contraseña";
    $formulario_valido = false;
    return;
}

if ($_POST['inputPassRegistro'] != $_POST['inputVerPassRegistro']) {
    echo "Sus contraseñas no coinciden";
    $formulario_valido = false;
    return;
}

if (!isset($_POST['checkTYC'])) {
    echo "Tiene que aceptar terminos y condiciones";
    $formulario_valido = false;
    return;
}

// $nombres = ['miguel', 'duvan', 'kevin', 86, 96, 32, true, false];
// echo $nombres[3];

if ($formulario_valido) {
    $array_generos = [];
    $nombre = $_POST['inputNombreRegistro'];
    $apellido = $_POST['inputApellidoRegistro'];
    $correo = $_POST['inputCorreoRegistro'];
    $edad = $_POST['inputEdadRegistro'];
    $pais = $_POST['selectPaisRegistro'];
    $clave = password_hash($_POST['inputPassRegistro'], PASSWORD_DEFAULT);
    $tycCheck = true;

    $sql_generos = "SELECT count(*) as cantidad_datos FROM tb_generos";
    $resultado_cantidad_generos = mysqli_query($conexion, $sql_generos);
    $resultado_cantidad_generos = mysqli_fetch_object($resultado_cantidad_generos);

    for ($generos_existentes=1; $generos_existentes < $resultado_cantidad_generos->cantidad_datos; $generos_existentes++) { 
        if(isset($_POST['checkGenero'.$generos_existentes])){
            array_push($array_generos, $generos_existentes);
        }
    }

    $array_generos = implode(',', $array_generos);

    $sql = "INSERT INTO tb_usuarios(nombre, apellido, correo, edad, id_pais, clave, id_generos_preferidos) VALUES ('$nombre', '$apellido', '$correo', $edad, $pais, '$clave', '$array_generos')";
    if (mysqli_query($conexion, $sql)) {
        header('Location:' . URL_WEB . '/login');
    } else {
        echo "Error: $sql <br>" . mysqli_error($conexion);
    }

    // print_r($clave);
}

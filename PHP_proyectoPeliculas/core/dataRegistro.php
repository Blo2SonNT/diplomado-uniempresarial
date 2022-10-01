<pre>
<?php
print_r($_POST);
/*
Array
(
    [inputNombreRegistro] => Officia excepteur be
    [inputApellidoRegistro] => Aut veniam quod lab
    [inputCorreoRegistro] => lizixe@mailinator.com
    [inputEdadRegistro] => 59
    [selectPaisRegistro] => 3
    [inputPassRegistro] => Pa$$w0rd!
    [inputVerPassRegistro] => Pa$$w0rd!
)

*/


if(empty($_POST['inputNombreRegistro'])){
    echo "el nombre esta vacio";
    return;
}

if(empty($_POST['inputApellidoRegistro'])){
    echo "el apellido es obligatorio";
    return;
}

if(empty($_POST['inputCorreoRegistro'])){
    echo "el correo es obligatorio";
    return;
}

if(empty($_POST['inputEdadRegistro'])){
    echo "la edad es obligatoria";
    return;
}

if(empty($_POST['selectPaisRegistro']) || !isset($_POST['selectPaisRegistro'])){
    echo "el pais es obligatorio";
    return;
}


if(empty($_POST['inputPassRegistro'])){
    echo "La contraseña es obligatoria";
    return;
}

if(empty($_POST['inputVerPassRegistro'])){
    echo "Verifique su contraseña";
    return;
}

if($_POST['inputPassRegistro'] != $_POST['inputVerPassRegistro']){
    echo "Sus contraseñas no coinciden";
    return;
}

if(!isset($_POST['checkTYC'])){
    echo "Tiene que aceptar terminos y condiciones";
}

// $nombres = ['miguel', 'duvan', 'kevin', 86, 96, 32, true, false];
// echo $nombres[3];
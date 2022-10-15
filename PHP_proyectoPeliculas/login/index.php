<?php
$estilos_adicionales = ['assets/css/login.css'];
require_once '../config.php';
require_once '../components/navbar.php';
require_once '../admin/includes/conexion.php';

?>

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <h2 class="my-5">Ingresar a mi cuenta</h2>
            <form action="login.server.php" method="POST">
                <div class="mb-3">
                    <label for="inputCorreoLogin" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="inputCorreoLogin" name="inputCorreoLogin">
                </div>
                <div class="mb-3">
                    <label for="inputClaveLogin" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="inputClaveLogin" name="inputClaveLogin">
                </div>
                <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary fw-bold">INGRESAR</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
require_once '../components/footer.php';
?>
<?php
require_once '../config.php';
require_once '../components/navbar.php';
require_once '../admin/includes/conexion.php';
?>

<section class="container">
    <h1 class="text-center my-5">Recuperar contraseña</h1>
    <div class="row">
        <div class="col-6 offset-3">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos reiciendis, aut maxime laborum, provident soluta voluptates praesentium, facilis odit unde natus accusamus? Facilis consequatur nobis ut numquam odio, deleniti delectus.</p>
            <form action="proceso-recuperacion.php" method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="inputRecuperacionCorreo" name="inputRecuperacionCorreo" placeholder="name@example.com">
                    <label for="inputRecuperacionCorreo">Correo electronico</label>
                </div>
                <?php
                if (isset($_GET['errorFormulario']) && $_GET['errorFormulario'] == 'true') {
                ?>
                    <div class="my-3">
                        <h6 class="text-center fw-bold text-danger">Ingrese el correo de su cuenta</h6>
                    </div>
                <?php
                }

                if (isset($_GET['errorFormulario']) && $_GET['errorFormulario'] = "1") {
                ?>
                    <div class="my-3">
                        <h6 class="text-center fw-bold text-danger">Su correo no se encuentra registrado</h6>
                    </div>
                <?php
                }
                ?>
                <div class="d-grid gap-2">
                    <button class="btn btn-dark" type="submit">Recuperar contraseña</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
require_once '../components/footer.php';
?>
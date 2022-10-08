<?php
require_once 'config.php';
require_once 'components/navbar.php';
$servidor = "localhost";
$usuario = "root";
$clave = "";
$nombre_bd = "marvel_uniempresarial";

$conexion = mysqli_connect($servidor, $usuario, $clave, $nombre_bd);

if (!$conexion) {
    die("Conexion fallo:" . mysqli_connect_error());
}

$query_sql_paises = "SELECT * FROM tb_paises";
$resultado_paises = mysqli_query($conexion, $query_sql_paises);
?>

<section class="container mt-5">
    <h1 class="my-5">Create una cuenta!</h1>
    <form class="row g-3" action="core/dataRegistro.php" method="POST">
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="inputNombreRegistro" name="inputNombreRegistro" placeholder="Nombre">
                <label for="inputNombreRegistro">Nombre</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="inputApellidoRegistro" name="inputApellidoRegistro" placeholder="Apellido">
                <label for="inputApellidoRegistro">Apellido</label>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="inputCorreoRegistro" name="inputCorreoRegistro" placeholder="Correo">
                <label for="inputCorreoRegistro">Correo</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="inputEdadRegistro" name="inputEdadRegistro" placeholder="Edad">
                <label for="inputEdadRegistro">Edad</label>
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <h4 class="mb-4">Generos favoritos</h4>
            <div class="row">
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="check1">
                        <label class="form-check-label" for="check1">
                            Terror
                        </label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="check2">
                        <label class="form-check-label" for="check2">
                            Drama
                        </label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="check3">
                        <label class="form-check-label" for="check3">
                            Comedia
                        </label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="check4">
                        <label class="form-check-label" for="check4">
                            Animación
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-select" id="selectPaisRegistro" name="selectPaisRegistro">
                    <option selected disabled value="">Seleccione una...</option>
                    <?php
                    while ($data = mysqli_fetch_object($resultado_paises)) {
                    ?>
                        <option value="<?php echo $data->id_registro ?>"><?php echo $data->nombre ?></option>
                    <?php
                    }
                    ?>
                </select>
                <label for="selectPaisRegistro">Pais</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="inputPassRegistro" name="inputPassRegistro" placeholder="name@example.com">
                <label for="floatingInput">Contraseña</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="inputVerPassRegistro" name="inputVerPassRegistro" placeholder="name@example.com">
                <label for="floatingInput">Verifica tu contraseña</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkTYC" name="checkTYC">
                <label class="form-check-label" for="checkTYC">
                    Acepto terminos y condiciones
                </label>
            </div>
        </div>
        <div class="col-12">
            <div class="d-grid gap-2">
                <button class="btn btn-dark" type="submit">Crear cuenta</button>
            </div>
        </div>
    </form>
</section>


<?php
require_once 'components/footer.php';
?>
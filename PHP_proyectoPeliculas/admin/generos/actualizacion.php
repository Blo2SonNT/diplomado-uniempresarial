<?php
require_once "../../config.php";
require_once '../includes/conexion.php';
require_once '../../components/navbar.php';

if (isset($_SESSION['perfil']) && $_SESSION['perfil'] == 1) {
    $sql_consulta_genero = "SELECT * FROM tb_generos WHERE id_registro = " . $_GET['id'];
    $resultado = mysqli_query($conexion, $sql_consulta_genero);
    $resultado = mysqli_fetch_object($resultado);
?>

    <section class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3">
                <form class="row g-3" action="server.generos.php?actualizacion=true" method="POST">
                    <input type="hidden" name="idRegistro" value="<?php echo $_GET['id'] ?>">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input value="<?php echo $resultado->nombre ?>" type="text" class="form-control" id="inputNombreGenero" name="inputNombreGenero" placeholder="Nombre">
                            <label for="inputNombreGenero">Nombre</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input value="<?php echo $resultado->url_imagen ?>" onblur="cargar_imagen(this.value)" type="text" class="form-control" id="inputUrlImagenGenero" name="inputUrlImagenGenero" placeholder="Url imagen">
                            <label for="inputUrlImagenGenero">Url Imagen</label>
                        </div>
                        <div class="my-4 d-flex justify-content-center align-items-center" id="imagenFormulario"></div>
                        <button class="btn btn-dark" type="submit">Actualizar Genero</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="code.js"></script>
    <script>
        cargar_imagen('<?php echo $resultado->url_imagen ?>')
    </script>
<?php


    require_once '../../components/footer.php';
} else {
    header('Location:' . URL_WEB);
}

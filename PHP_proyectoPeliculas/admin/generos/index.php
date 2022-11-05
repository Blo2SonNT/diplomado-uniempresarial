<?php
$estilos_adicionales = ['assets/css/tablas_admin.css'];
require_once '../../config.php';
require_once '../../admin/includes/conexion.php';
require_once '../../components/consulta_opciones_navbar.php';
require_once '../../components/navbar.php';


if (isset($_SESSION['perfil']) && $_SESSION['perfil'] == 1) {


    require_once '../includes/conexion.php';
    $query_sql = "SELECT * FROM tb_generos";
    $resultado = mysqli_query($conexion, $query_sql);

?>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="my-5">Administración de generos</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreaGenero">
                Crear genero
            </button>
        </div>

        <?php
        if (isset($_GET['actualizado'])) {
        ?>
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>El dato quedo actualizado correctamente</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        if (isset($_GET['eliminado'])) {
        ?>
            <div class="alert alert-secondary alert-dismissible fade show text-center" role="alert">
                <strong>El dato quedo eliminado correctamente</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>

        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Imagen</th>
                    <th colspan="2" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_object($resultado)) {
                ?>
                    <tr>
                        <th><?php echo $data->id_registro ?></th>
                        <td><?php echo $data->nombre ?></td>
                        <td>
                            <img src="<?php echo $data->url_imagen ?>" class="w-25">
                        </td>
                        <td colspan="2" class="control-espacio">
                            <a href="actualizacion.php?id=<?php echo $data->id_registro ?>">
                                <button class="btn btn-warning"><i class="fa-solid fa-pencil me-3"></i>Editar</button>
                            </a>
                            <a href="server.generos.php?eliminar=true&id=<?php echo $data->id_registro ?>">
                                <button class="btn btn-danger"><i class="fa-solid fa-circle-xmark me-3"></i>Eliminar</button>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>


        <div class="modal fade" id="modalCreaGenero" tabindex="-1" aria-labelledby="modalCreaGeneroLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalCreaGeneroLabel">Crear genero</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="server.generos.php" method="POST">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="inputNombreGenero" name="inputNombreGenero" placeholder="Nombre">
                                    <label for="inputNombreGenero">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="inputUrlImagenGenero" name="inputUrlImagenGenero" placeholder="Url imagen">
                                    <label for="inputUrlImagenGenero">Url Imagen</label>
                                </div>
                                <button class="btn btn-dark" type="submit">Crear Genero</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
    require_once '../../components/footer.php';
} else {
    header('Location:' . URL_WEB);
}

<?php


if (isset($_SESSION['perfil']) && $_SESSION['perfil'] != 1) {
    header('Location:' . URL_WEB);
}

require_once '../../config.php';
require_once '../../admin/includes/conexion.php';
require_once '../../components/consulta_opciones_navbar.php';
require_once '../../components/navbar.php';

if (isset($_SESSION['perfil']) && $_SESSION['perfil'] == 1) {

    $sql_peliculas_series = "SELECT * FROM tb_peliculas_series WHERE id_est_registro = 1";
    $resultado_query = mysqli_query($conexion, $sql_peliculas_series);

    $sql_tipo_filme = "SELECT * FROM tb_tipos_video";
    $resultado_tipos = mysqli_query($conexion, $sql_tipo_filme);

    $query_sql_generos = "SELECT * FROM tb_generos";
    $resultado_generos = mysqli_query($conexion, $query_sql_generos);


?>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="my-5">Administración de registros de peliculas y series</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreaFilme">
                Registrar filme
            </button>
        </div>

        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Clasificación</th>
                    <th scope="col" style="width: 200px;">Imagen</th>
                    <th scope="col">Fecha de estreno</th>
                    <th colspan="2" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_object($resultado_query)) {
                ?>
                    <tr>
                        <th><?php echo $data->id_registro ?></th>
                        <td><?php echo $data->nombre ?></td>
                        <td><?php echo $data->id_genero ?></td>
                        <td><?php echo $data->clasificacion ?></td>
                        <td>
                            <a target="_blank" href="<?php echo $data->url_imagen ?>">
                                <img class="w-100" src="<?php echo $data->url_imagen ?>" alt="">
                            </a>
                        </td>
                        <td><?php echo $data->fec_estreno ?></td>
                        <td colspan="2">
                            <button class="btn btn-warning"><i class="fa-solid fa-pencil me-3"></i>Editar</button>
                            <button class="btn btn-danger"><i class="fa-solid fa-circle-xmark me-3"></i>Eliminar</button>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>


        <div class="modal fade" id="modalCreaFilme" tabindex="-1" aria-labelledby="modalCreaFilmeLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalCreaFilmeLabel">Registrar pelicula o serie</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="server.pelicula_series.php" method="POST">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="inputNombrePais" name="inputNombrePais" placeholder="Nombre">
                                    <label for="inputNombrePais">Nombre</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="inputFecEstreno" name="inputFecEstreno" placeholder="Fecha de estreno">
                                    <label for="inputFecEstreno">Fecha de estreno</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="inputDirector" name="inputDirector" placeholder="Director">
                                    <label for="inputDirector">Director</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="ListaOpcionesFilme">
                                        <option selected disabled>Seleccione una...</option>
                                        <?php
                                        while ($data_tipo_genero = mysqli_fetch_object($resultado_tipos)) {
                                        ?>
                                            <option value="<?php echo $data_tipo_genero->id_registro ?>"><?php echo $data_tipo_genero->nombre ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <label for="ListaOpcionesFilme">Tipo de filme</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="listaGeneros">
                                        <option selected disabled>Seleccione una...</option>
                                        <?php
                                        while ($data_genero = mysqli_fetch_object($resultado_generos)) {
                                        ?>
                                            <option value="<?php echo $data_genero->id_registro ?>"><?php echo $data_genero->nombre ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <label for="listaGeneros">Genero</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="inputClasificacion" name="inputClasificacion" placeholder="Director">
                                    <label for="inputClasificacion">Clasificación</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="inputImagen" name="inputImagen" placeholder="Director">
                                    <label for="inputImagen">Imagen</label>
                                </div>
                                <button class="btn btn-dark" type="submit">Crear</button>
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

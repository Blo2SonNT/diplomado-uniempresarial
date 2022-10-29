<?php

// for ($i=1; $i <= 100 ; $i++) { 
//     echo $i."<br>";
// }

// $contador = 0;
// while ($contador <= 100) {
//     echo $contador."<br>";
//     $contador++;
// }
if (isset($_SESSION['perfil']) && $_SESSION['perfil'] != 1) {
    header('Location:' . URL_WEB);
}

require_once '../../config.php';
require_once '../../components/navbar.php';

if (isset($_SESSION['perfil']) && $_SESSION['perfil'] == 1) {
    require_once '../includes/conexion.php';

    $query_sql = "SELECT * FROM tb_paises";
    $resultado = mysqli_query($conexion, $query_sql);

?>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="my-5">Administración de paises</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreaPais">
                Crear pais
            </button>
        </div>

        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
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


        <div class="modal fade" id="modalCreaPais" tabindex="-1" aria-labelledby="modalCreaPaisLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalCreaPaisLabel">Crear pais</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="server.paises.php" method="POST">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="inputNombrePais" name="inputNombrePais" placeholder="Nombre">
                                    <label for="inputNombrePais">Nombre</label>
                                </div>
                                <button class="btn btn-dark" type="submit">Crear Pais</button>
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

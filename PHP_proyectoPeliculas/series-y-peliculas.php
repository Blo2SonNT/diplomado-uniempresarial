<?php
require_once 'config.php';
require_once 'admin/includes/conexion.php';
require_once 'components/consulta_opciones_navbar.php';
require_once 'components/navbar.php';

$sql_consulta = "SELECT * FROM tb_peliculas_series where id_est_registro = 1 AND id_tipo_video = " . $_GET['tipoFilme'];
$resultado_query = mysqli_query($conexion, $sql_consulta);
if ($resultado_query->num_rows > 0) {

?>
    <section class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="row row-cols-2 row-cols-md-4 g-4">
                    <?php
                    while ($data_filme = mysqli_fetch_object($resultado_query)) {
                    ?>
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $data_filme->url_imagen ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data_filme->nombre ?></h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><?php echo $data_filme->director ?></span>
                                        <span><?php echo $data_filme->fec_estreno ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php
    require_once 'components/footer.php';
} else {
?>
    <section class="container mt-5">
        <div class="alert alert-danger fw-bold text-center" role="alert">
            No existe la opción solicitada
        </div>
    </section>

<?php
}
?>
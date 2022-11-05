<?php
$sql_opciones_visitante = "SELECT * FROM tb_tipos_video WHERE id_est_registro = 1";
$resultado_opciones_visitante = mysqli_query($conexion, $sql_opciones_visitante);
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    // este fragmento es imrimir nuestro codigo con solo php
    // if(isset($titulo_pagina)){
    //     echo "<title>$titulo_pagina</title>";
    // }else{
    //     echo "<title>Pagina de marvel</title>";
    // }
    ?>

    <?php
    //este fragmento es para imprimir con html junto con php
    if(isset($titulo_pagina)){
        ?><title><?php echo $titulo_pagina ?></title><?php
    }else{
        ?><title>Pagina de marvel</title><?php
    }
    ?>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL_WEB ?>/assets/css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logoPagina" src="<?php echo URL_WEB ?>/assets/img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fw-bold link-navbar" href="#">
                            <i class="fa-solid fa-dragon me-2"></i>Series
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold link-navbar" href="#">
                            <i class="fa-solid fa-video me-2"></i>Peliculas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold link-navbar" href="#">
                            <i class="fa-solid fa-otter me-2"></i>Animaciones
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sesión
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
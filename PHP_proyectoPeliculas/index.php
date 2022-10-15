<?php
// session_start();
// if($_SESSION['correo']){
//     echo "bienvenido";
// }
$titulo_pagina = 'Inicio peliculas y series de MARVEL';
require_once 'config.php';
require_once 'components/navbar.php';
?>


    <section class="container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/A852F49B353781B183AC1A104C1108BEB413B9DF47FB163B4CCBAF4000EB6343/compose?width=1440&aspectRatio=3.91&format=jpeg&label=disneyplusoriginal_391" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/DD708A896459190A309C594AC802C11F591DC3416A4EBB5C511ABB2F4AA9EC3A/compose?width=1440&aspectRatio=3.91&format=jpeg&label=disneyplusoriginal_391" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/16F2DFC4409EBC50788A6CAE40F5AD846C7563907303A712E2544B74A3722821/scale?width=1440&aspectRatio=3.91&format=jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/A7703EB78AD7CDDADA21FC8D32A25B66FF55597A211226F699B6FCF22DA70757/compose?width=1440&aspectRatio=3.91&format=jpeg&label=disneyplusoriginal_391" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/EE01CC2A5C061936CD0C0750F3382D30970598D9B31D451FA201E0D90D6BE18E/compose?width=1440&aspectRatio=3.91&format=jpeg&label=disneyplusoriginal_391" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="container mt-5">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="row row-cols-2 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/4B606EF36712FE9A3C3DE05E7C9FCCB142B725411857BA94AF0DD0F6860A183B/badging?width=400&aspectRatio=1.78&format=jpeg&label=disneyplusoriginal" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/11AB6D3F8B9862C23350D3F2A986BD4BF94C09902098DD3036D61ED4A5E75801/scale?width=400&aspectRatio=1.78&format=jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C6EAD81E6BDB0A42BDE8B0BDDF9A2FAEDEDF7B55ABD58FD3119EA41BFEB197DB/scale?width=400&aspectRatio=1.78&format=jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/47642176DD5466277571A7523064D2522DC8901D5FA7A5008C43382EB8F72B48/badging?width=400&aspectRatio=1.78&format=jpeg&label=disneyplusoriginal" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/CDFF38C4E0D5966152BA4087F85154710B102E4DD7A8ABA5A80EC815A7F581CE/scale?width=400&aspectRatio=1.78&format=jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7C736D42E0CF96F19955BC0885978DBC4A341CD080F80E10493583F39C13BF27/scale?width=400&aspectRatio=1.78&format=jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/86BF2B5F94A03A884F734FBC6CEDC08378C848592FC4CC7ED75FC0BD2E65993A/scale?width=400&aspectRatio=1.78&format=jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <ul class="list-group">
                    <li class="list-group-item seccion-noticia">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fw-bold h-100 textoNoticia">Noticia: disney confirmo que intensa mente tyendra una secuela</p>
                            <img src="https://www.cinepremiere.com.mx/wp-content/uploads/2022/09/intensamente-2.jpg" class="w-25" alt="">
                        </div>
                    </li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
            </div>
        </div>
    </section>

<?php
require_once 'components/footer.php';
?>

<?php include '_session.php'; ?>
<?php
    $page = 1;
    $relpath = "";

    include '_conexao.php';

    include 'header.php';
    include 'topbar.php';
    include 'navbar.php';

?>

<div>

    <!-- Carousel -->
    <div class="container mt-0">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner_1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner_2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner_3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Carousel -->

    <div class="container my-5">

        <!--Section: Content-->
        <section class="dark-grey-text text-center">

            <!-- Section heading -->
            <h3 class="font-weight-bold mb-4 pb-2">Últimos Lançamentos</h3>
            <!-- Section description -->
            <p class="grey-text w-responsive mx-auto mb-5">“Um livro é um brinquedo feito com letras. Ler é brincar.” -
                <b>Rubem Alves</b>
            </p>

            <!-- Grid row -->
            <div class="row">
                <?php
                    $sqlNovidades = "SELECT id_bk, id_aut, tit_bk, preco_bk, capa_bk, author.nome_aut AS 'aut_bk', aval_bk FROM book, author WHERE book.id_aut_bk = author.id_aut ORDER BY datalanc_bk DESC LIMIT 8";
                    $buscaNovidades = mysqli_query($conexao, $sqlNovidades);

                    while ($arrayNovidades = mysqli_fetch_array($buscaNovidades)) {

                        $id_bk = $arrayNovidades['id_bk'];
                        $id_aut = $arrayNovidades['id_aut'];
                        $tit_bk = $arrayNovidades['tit_bk'];
                        $preco_bk = $arrayNovidades['preco_bk'];
                        $capa_bk = $arrayNovidades['capa_bk'];
                        $aut_bk = $arrayNovidades['aut_bk']; 
                        $aval_bk = $arrayNovidades['aval_bk']; 
                ?>
                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img src="pages/book/img/<?php echo $capa_bk; ?>.png" class="card-img-top"
                                alt="Capa do livro">
                            <a href="pages/book/index.php?id=<?php echo $id_bk ?>">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center pb-3">
                            <!-- Title -->
                            <h4 class="card-title mb-2">
                                <strong>
                                    <a class="text-primary"
                                        href="pages/book/index.php?id=<?php echo $id_bk ?>"><?php echo $tit_bk; ?></a>
                                </strong>
                            </h4>
                            <h6 class=" card-title mb-1">
                                <a class="text-info"
                                    href="pages/author/index.php?id=<?php echo $id_aut ?>"><?php echo $aut_bk; ?></a>
                            </h6>

                            <!-- Description -->
                            <p class="card-text mt-2">
                                Nota: <code class="dark-grey-text"><?php echo $aval_bk ?></code><br />

                                <?php
                                    
                                    if ($aval_bk > 0 && $aval_bk <= 0.5) {
                                        echo '<span class="fas fa-star-half-alt"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                    } elseif ($aval_bk > 0.5 && $aval_bk <= 1) {
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                    } elseif ($aval_bk > 1 && $aval_bk <= 1.5) {
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star-half-alt"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                    } elseif ($aval_bk > 1.5 && $aval_bk <= 2) {
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                    } elseif ($aval_bk > 2 && $aval_bk <= 2.5) {
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star-half-alt"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                    } elseif ($aval_bk > 2.5 && $aval_bk <= 3) {
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                    } elseif ($aval_bk > 3 && $aval_bk <= 3.5) {
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star-half-alt"></span>';
                                        echo '<span class="far fa-star"></span>';
                                    } elseif ($aval_bk > 3.5 && $aval_bk <= 4) {
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                    } elseif ($aval_bk > 4 && $aval_bk < 5) {
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star-half-alt"></span>';
                                    } elseif ($aval_bk == 5) {
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                        echo '<span class="fas fa-star"></span>';
                                    } else {
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                        echo '<span class="far fa-star"></span>';
                                    }

                                ?>
                            </p>
                            <!-- Card footer -->
                            <div class="card-footer px-1">
                                <span class="float-left font-weight-bold">
                                    <strong>R$ <?php echo $preco_bk ?></strong>
                                </span>
                                <span class="float-right">
                                    <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top"
                                        title="Comprar" href="pages/book/index.php?id=<?php echo $id_bk ?>">
                                        <i class="fas fa-shopping-cart grey-text ml-3"></i>
                                    </a>
                                    <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top"
                                        title="Ver Mais" href="pages/book/index.php?id=<?php echo $id_bk ?>">
                                        <i class="fas fa-plus grey-text ml-3"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
                <?php   } ?>
            </div>
            <!-- Grid row -->

        </section>
        <!--Section: Content-->

    </div>

</div>

<?php
    include 'footer.php';
?>
<?php include '../../_session.php'; ?>
<?php
    $page = 1;
    $relpath = "../../";

    include $relpath.'_conexao.php';

    include $relpath.'header.php';
    include $relpath.'topbar.php';
    include $relpath.'navbar.php';

?>

<div>

    <section class="dark-grey-text text-center" id="books">
        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                            alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">"Ler é viver mil vidas diferentes em uma única existência."</h3>
                        <p>André William Segalla</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                            alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">"Ler é viajar com os olhos."</h3>
                        <p>Sérgio Cordeiro</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                            alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">"Ler é mergulhar em outros mundos."</h3>
                        <p>Rafael Fioratto</p>
                    </div>
                </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
    </section>


    <div class="container my-5">

        <!--Section: Content-->
        <section class="dark-grey-text text-center">

            <!-- Grid row -->
            <div class="row">
                <?php
                    $sqlNovidades = "SELECT id_bk, id_aut, tit_bk, preco_bk, capa_bk, author.nome_aut AS 'aut_bk', aval_bk FROM book, author WHERE book.id_aut_bk = author.id_aut";
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
                            <img src="img/<?php echo $capa_bk; ?>.png" class="card-img-top" alt="Capa do livro">
                            <a href="index.php?id=<?php echo $id_bk ?>">
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
                                        href="index.php?id=<?php echo $id_bk ?>"><?php echo $tit_bk; ?></a>
                                </strong>
                            </h4>
                            <h6 class=" card-title mb-1">
                                <a class="text-info"
                                    href="index.php?id=<?php echo $id_aut ?>"><?php echo $aut_bk; ?></a>
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
                                        title="Comprar" href="index.php?id=<?php echo $id_bk ?>">
                                        <i class="fas fa-shopping-cart grey-text ml-3"></i>
                                    </a>
                                    <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top"
                                        title="Ver Mais" href="index.php?id=<?php echo $id_bk ?>">
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
    include $relpath.'footer.php';
?>
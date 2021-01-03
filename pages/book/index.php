<?php include '../../_session.php'; ?>
<?php
    $page = 1;
    $relpath = "../../";

    $id_bk = $_GET['id'];

    include $relpath.'_conexao.php';

    include $relpath.'header.php';
    include $relpath.'topbar.php';
    include $relpath.'navbar.php';

    $sqlBook = "SELECT id_bk, isbn_bk, ean_bk, datalanc_bk, tit_bk, titorig_bk, id_aut_bk, form_bk, pag_bk, acab_bk, preco_bk, capa_bk, coment1_bk, coment2_bk, coment3_bk, sinopse_bk, author.nome_aut AS 'nome_aut_bk' FROM book INNER JOIN author ON book.id_aut_bk = author.id_aut WHERE id_bk = $id_bk";

    $sqlGen = "SELECT genre.id_gen, nome_gen FROM genre INNER JOIN genre_book ON genre.id_gen = genre_book.id_gen INNER JOIN book ON genre_book.id_bk = book.id_bk WHERE book.id_bk = $id_bk";

    $sqlCountGen = "SELECT COUNT(genre.id_gen) AS 'qtd_gen' FROM genre INNER JOIN genre_book ON genre.id_gen = genre_book.id_gen INNER JOIN book ON genre_book.id_bk = book.id_bk WHERE book.id_bk = $id_bk";

    $buscaBook = mysqli_query($conexao, $sqlBook);
    $buscaCountGen = mysqli_query($conexao, $sqlCountGen);
    $buscaGen = mysqli_query($conexao, $sqlGen);

    //$arrayBook = mysqli_fetch_array($buscaBook);
    $arrayCountGen = mysqli_fetch_array($buscaCountGen);
    $count = 1;
    
    while ($count <= $arrayCountGen['qtd_gen']) {
        $arrayGen = mysqli_fetch_array($buscaGen);

        $id_gen = $arrayGen['id_gen'];
        $nome_gen = $arrayGen['nome_gen'];

        $generos[$count] = array ("id_gen" => "$id_gen", "nome_gen" => "$nome_gen");
        $count++;
    }
    
?>

<div>

    <div class="container my-5 py-5 z-depth-1">

        <!--Section: Content-->
        <section class="text-center">
            <?php
                while ($arrayBook = mysqli_fetch_array($buscaBook)) {

                    $id_bk = $arrayBook['id_bk'];
                    $isbn_bk = $arrayBook['isbn_bk'];
                    $ean_bk = $arrayBook['ean_bk'];
                    $datalanc_bk = $arrayBook['datalanc_bk'];
                    $tit_bk = $arrayBook['tit_bk'];
                    $titorig_bk = $arrayBook['titorig_bk'];
                    $id_aut_bk = $arrayBook['id_aut_bk'];
                    $nome_aut_bk = $arrayBook['nome_aut_bk'];
                    $form_bk = $arrayBook['form_bk'];
                    $pag_bk = $arrayBook['pag_bk'];
                    $acab_bk = $arrayBook['acab_bk'];
                    $preco_bk = $arrayBook['preco_bk'];
                    $capa_bk = $arrayBook['capa_bk'];
                    $coment1_bk = $arrayBook['coment1_bk'];
                    $coment2_bk = $arrayBook['coment2_bk'];
                    $coment3_bk = $arrayBook['coment3_bk'];
                    $sinopse_bk = $arrayBook['sinopse_bk'];

            ?>
            <!-- Section heading -->
            <div class="row">

                <div class="col-lg-6">

                    <!--Carousel Wrapper-->
                    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                        data-ride="carousel">

                        <!--Slides-->
                        <div class="carousel-inner text-center text-md-left" role="listbox">
                            <div class="carousel-item active">
                                <img src="img/<?php echo $capa_bk; ?>.png" alt="Capa do Livro" class="img-fluid">
                            </div>
                        </div>
                        <!--/.Slides-->

                        <!--Thumbnails-->
                        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Thumbnails-->

                    </div>
                    <!--/.Carousel Wrapper-->

                </div>

                <div class="col-lg-5 text-center text-md-left">

                    <h2
                        class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                        <strong><?php echo $tit_bk; ?></strong>
                    </h2>
                    <span class="badge badge-danger product mb-4 ml-xl-0 ml-4"><?php echo $nome_aut_bk; ?></span>
                    <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                        <span class="red-text font-weight-bold">
                            <strong>R$ <?php echo $preco_bk; ?></strong>
                        </span>
                    </h3>

                    <!--Accordion wrapper-->
                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1"
                                    aria-expanded="true" aria-controls="collapseOne1">
                                    <h5 class="mb-0">
                                        Comentários
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    <span><?php echo $coment1_bk; ?></span>
                                    <hr>
                                    <span><?php echo $coment2_bk; ?></span>
                                    <hr>
                                    <span><?php echo $coment3_bk; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx"
                                    href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                    <h5 class="mb-0">
                                        Detalhes do Produto
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div><i class="fas fa-pen-nib mr-5"></i><b>Autor:
                                            </b><?php echo $nome_aut_bk; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div><i
                                                class="far fa-calendar-alt mr-5"></i><b>Lançamento:
                                            </b><?php echo $datalanc_bk; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div><i class="fas fa-book mr-5"></i><b>Título
                                                original:
                                            </b><?php echo $titorig_bk; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div><i
                                                class="fas fa-expand-arrows-alt mr-5"></i></i><b>Formato:
                                            </b><?php echo $form_bk; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div><i class="far fa-file-alt mr-5"></i><b>Número
                                                de
                                                páginas:
                                            </b><?php echo $pag_bk; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div><i class="fas fa-broom mr-5"></i><b>Acabamento:
                                            </b><?php echo $acab_bk; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div><i class="fas fa-tag mr-5"></i><b>ISBN:
                                            </b><?php echo $isbn_bk; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="md-v-line"></div><i class="fas fa-barcode mr-5"></i><b>EAN:
                                            </b><?php echo $ean_bk; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingThree3">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx"
                                    href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                    <h5 class="mb-0">
                                        Sinopse do Livro
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                                data-parent="#accordionEx">
                                <div class="card-body">
                                    <span>
                                        <?php echo $sinopse_bk; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card -->

                    </div>
                    <!--/.Accordion wrapper-->


                    <!-- Add to Cart -->
                    <section class="color">
                        <div class="mt-5">
                            <p class="grey-text">Formato</p>
                            <div class="row text-center text-md-right">

                                <div class="col-md-3">
                                    <!--Radio group-->
                                    <div class="form-group">
                                        <input class="form-check-input" name="group100" type="radio" id="radio100"
                                            checked="checked">
                                        <label for="radio100" class="form-check-label dark-grey-text">Impresso</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <!--Radio group-->
                                    <div class="form-group">
                                        <input class="form-check-input" name="group100" type="radio" id="radio101">
                                        <label for="radio101" class="form-check-label dark-grey-text">E-book</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12 text-center text-md-left text-md-right">
                                    <button class="btn btn-primary btn-rounded">
                                        <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> ADICIONAR AO
                                        CARRINHO</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /.Add to Cart -->

                </div>

            </div>
            <?php } ?>

        </section>
        <!--Section: Content-->


    </div>
</div>

<?php
    include $relpath.'footer.php';
?>
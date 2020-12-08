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
                        <img src="assets/banner_1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/banner_2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/banner_3.png" class="d-block w-100" alt="...">
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
    <div class="container mt-3">
        <center>
            <h4>Confira as nossas novidades:</h4>
        </center>
        <center>
            <div class="row justify-content-around">
                <?php 
                $sqlNovidades = "SELECT id_bk, tit_bk, preco_bk, capa_bk, author.nome_aut AS 'aut_bk' FROM book, author WHERE book.id_aut_bk = author.id_aut ORDER BY datalanc_bk DESC LIMIT 9";
                $buscaNovidades = mysqli_query($conexao, $sqlNovidades);

                while ($arrayNovidades = mysqli_fetch_array($buscaNovidades)) {

                    $id_bk = $arrayNovidades['id_bk'];
                    $tit_bk = $arrayNovidades['tit_bk'];
                    $preco_bk = $arrayNovidades['preco_bk'];
                    $capa_bk = $arrayNovidades['capa_bk'];
                    $aut_bk = $arrayNovidades['aut_bk']; 
            ?>
                <div class="col-4">
                    <div class="card" style="width: 13rem;">
                        <img src="products/book/assets/<?php echo $capa_bk; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <center>
                                <h5 class="card-title">
                                    <?php echo $tit_bk; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo $aut_bk; ?>
                                </p>
                            </center>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <?php echo 'R$ '.$preco_bk; ?>
                                </div>
                                <div class="col-3">
                                    <a href="?id=<?php echo $id_bk; ?>" class="btn btn-primary">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php   } ?>
            </div>
        </center>
    </div>
</div>

<?php
    include 'footer.php';
?>
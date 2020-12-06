<?php include '_session.php'; ?>
<?php
    $page = 1;

    include '_conexao.php';

    include 'header.php';
    include 'topbar.php';
    include 'navbar.php';

?>

<div>
    <div class="container" style="margin-top: 20px;">
        <h2>Confira as nossas novidades:</h2>
        <div class="container float-left">
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
</div>

<?php
    include 'footer.php';
?>
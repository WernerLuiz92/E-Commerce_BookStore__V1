<?php include '../../_session.php'; ?>
<?php
    $page = 1;
    $relpath = "../../";

    $id = $_GET['id_gen'];
 
    include $relpath.'_conexao.php';

    include $relpath.'header.php';
    include $relpath.'topbar.php';
    include $relpath.'navbar.php';

    $sqlNomeGen = "SELECT nome_gen FROM genre WHERE id_gen = $id";
    $buscaNomeGen = mysqli_query($conexao, $sqlNomeGen);

    $arrayNomeGen = mysqli_fetch_array($buscaNomeGen);

    $nome_gen = $arrayNomeGen['nome_gen'];

?>

<div>

    <!-- Gêneros -->
    <div class="container mt-3">
        <h3>Gênero <?php echo $nome_gen; ?></h3>
        <center>
            <div class="row justify-content-around">
                <?php
                        $sqlLivroGenero = "SELECT book.id_bk, tit_bk, preco_bk, capa_bk, author.nome_aut AS 'aut_bk' FROM book INNER JOIN author ON book.id_aut_bk = author.id_aut INNER JOIN genre_book ON book.id_bk = genre_book.id_bk WHERE book.id_aut_bk = author.id_aut AND genre_book.id_gen = $id";
                        $buscaLivroGenero = mysqli_query($conexao, $sqlLivroGenero);

                        if (!empty(mysqli_fetch_array($buscaLivroGenero))) {
                            
                            while ($arrayLivroGenero = mysqli_fetch_array($buscaLivroGenero)) {

                                $id_bk = $arrayLivroGenero['id_bk'];
                                $tit_bk = $arrayLivroGenero['tit_bk'];
                                $preco_bk = $arrayLivroGenero['preco_bk'];
                                $capa_bk = $arrayLivroGenero['capa_bk'];
                                $aut_bk = $arrayLivroGenero['aut_bk'];
                                ?>
                <div class="col-4">
                    <div class="card mt-3" style="width: 16rem;">
                        <img src="<?php echo $relpath; ?>pages/book/img/<?php echo $capa_bk; ?>.png"
                            class="card-img-top" alt="...">
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
                                    <a href="?id=<?php echo $id_bk; ?>" class="btn btn-primary">Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                            }
                        } else {
                            echo 'Nenhum livro encontrado para esta categoria!';
                        }
                ?>

            </div>
        </center>
    </div>
    <!-- Gêneros -->

</div>

<?php
    include $relpath.'footer.php';
?>
<?php include '../../_session.php'; ?>
<?php
    $page = 0;
    $relpath = "../../";

    include $relpath.'_conexao.php';

    include $relpath.'header.php';
    include $relpath.'topbar.php';
    include $relpath.'navbar.php';

?>

<div>
    <div class="container" id="tamanhoContainer" style="margin-top: 35px; width: 500px;">
        <div style="margin-top: 20px;"></div>
        <h4>Importação de dados</h4>
        <form action="_dataimport.php" method="post" enctype="multipart/form-data" style="margin-top: 20px;">
            <div class="form-group">
                <label for="filename"><b>Escolha o arquivo</b></label>
                <input type="file" class="form-control-file" name="file" id="file" required>
                <small>Atenção: deve ser um arquivo no formato .json</small>
            </div>
            <label><b>Escolha a tabela</b></label>
            <div class="row row-cols-3">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="table" id="table_book" value="1" required>
                        <label class="form-check-label" for="table_book">
                            Livros
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="table" id="table_author" value="2" required>
                        <label class="form-check-label" for="table_author">
                            Autores
                        </label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="table" id="table_genre" value="3" required>
                        <label class="form-check-label" for="table_genre">
                            Gêneros
                        </label>
                    </div>
                </div>
            </div>
            <div class="botoes" style="margin-top: 25px; text-align: right; width: 49%; float: right;">
                <button type="submit" class="btn btn-success btn-sm" name="submit" value="Upload Json"><i
                        class="fas fa-save"></i>&nbsp;Importar</button>
            </div>
        </form>
    </div>
</div>

<?php
    include $relpath.'footer.php';
?>
<?php include '../../_session.php'; ?>
<?php
$page = 0;
$relpath = "../../";

    include $relpath.'_conexao.php';;

$table = $_POST['table'];
$file = $_FILES['file'];
$timezone = new DateTimeZone('America/Sao_Paulo');
$now = new DateTime('now', $timezone);
$hash = $now->format("YmdHis");

$targetdir = "uploads/";
$targetfile = $targetdir . $hash ."-" . basename($file['name']);
$uploadOk = 1;
$fileMoved = 0;

//Verifica de o arquivo é um .json
if(isset($_POST['submit'])) {
    $check = $file['type'];
    if($check == "application/json") {
        $uploadOk = 1;
    }else {
        $err = "O arquivo selecionado não é um .json. Por favor, volte e selecione o tipo correto.";
        $uploadOk = 0;
    }
}

//Salva o arquivo
if ($uploadOk == 0 ) {
    $return = "Ops! Desculpe, mas seu arquivo não pode ser salvo no servidor.";
} else {
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfile)) {
        $return = "Arquivo salvo com Sucesso!";
        $err = "";
        $fileMoved = 1;
    } else {
        $err = "O arquivo não pode ser salvo.";
        $fileMoved = 0;
    }
}

//Importa o arquivo salvo para o banco de dados
if ($fileMoved == 0) {
    $return = "Ops! Desculpe, mas seu arquivo não pode ser importado.";
    $err = "O Arquivo não foi salvo!";
} else {

    $data = file_get_contents($targetfile);

    $array = json_decode($data, true);

    foreach ($array as $row) {
        switch ($table) {
            case 1:
                $sql = "INSERT INTO book (isbn_bk, ean_bk, datalanc_bk, tit_bk, tit_bk_alfa, titorig_bk, id_aut_bk, form_bk, pag_bk, aval_bk, acab_bk, preco_bk, capa_bk, coment1_bk, coment2_bk, coment3_bk, sinopse_bk) VALUES ('".$row["isbn_bk"]."', '".$row["ean_bk"]."', '".$row["datalanc_bk"]."', '".$row["tit_bk"]."', '".$row["tit_bk_alfa"]."', '".$row["titorig_bk"]."', ".$row["id_aut_bk"].", '".$row["form_bk"]."', ".$row["pag_bk"].", ".$row["aval_bk"].", '".$row["acab_bk"]."', ".$row["preco_bk"].", '".$row["capa_bk"]."', '".$row["coment1_bk"]."', '".$row["coment2_bk"]."', '".$row["coment3_bk"]."', '".$row["sinopse_bk"]."')";
            break;
            case 2:
                $sql = "INSERT INTO author (nome_aut, desc_aut, foto_aut) VALUES ('".$row["nome_aut"]."', '".$row["desc_aut"]."', '".$row["foto_aut"]."')";
            break;
            case 3:
                $sql = "INSERT INTO genre (nome_gen) VALUES ('".$row["nome_gen"]."')";
            break;
            default:
                $return = "Ops! Desculpe, mas seu arquivo não pode ser importado.";
                $err = "Não foi selecionado uma tabela válida!";
        }
        

        mysqli_query($conexao, $sql);
    }
//Cria o registro na tabela genre_book que faz o relacionamento "n <-> n" das tabelas.
    if ($table === "1") {
        foreach ($array as $row) {
            $sqlId_bk = "SELECT id_bk FROM book WHERE isbn_bk = '".$row["isbn_bk"]."'";
            $queryId_bk = mysqli_query($conexao, $sqlId_bk);
            $bookId = mysqli_fetch_array($queryId_bk);

            $arrayGenBook['id_gen'] = $row['id_gen'];
            $arrayGenBook['id_bk'] = $bookId['id_bk'];        

            foreach($arrayGenBook['id_gen'] as $row => $id_gen) {
                $sqlGenBook = "INSERT INTO genre_book (id_gen, id_bk) VALUES (".$id_gen.", ".$arrayGenBook['id_bk'].")";

                mysqli_query($conexao, $sqlGenBook);
            }
        }    
    }
}

?>
<?php
    include $relpath.'header.php';
    include $relpath.'topbar.php';
    include $relpath.'navbar.php';
?>
<div>
    <center>
        <div class="container" style="width: 500px; margin-top: 40px;">
            <h4 style="margin-top: 20px;"><?php echo $return; ?></h4>
            <small><?php echo $err; ?></small><br />
            <a class="btn btn-sm btn-primary" href="dataimport.php" role="button"><i
                    class="fas fa-long-arrow-alt-left"></i>&nbsp;Voltar</a>
        </div>
    </center>
</div>
<?php
    include $relpath.'footer.php';
?>
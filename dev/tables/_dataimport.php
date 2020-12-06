<?php include '../../_session.php'; ?>
<?php
    $page = 0;
    $relpath = "../../";

    include $relpath.'_conexao.php';;

$table = $_POST['table'];
$file = $_FILES['file'];

$targetdir = "uploads/";
$targetfile = $targetdir . basename($file['name']);
$uploadOk = 1;

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
    } else {
        $err = "O arquivo não pode ser salvo.";
    }
}

/*
$filename = 'book.json';

$data = file_get_contents($filename);

$array = json_decode($data, true);

foreach($array as $row){
    $sql = "INSERT INTO book (isbn_bk, ean_bk, datalanc_bk, tit_bk, tit_bk_alfa, titorig_bk, id_aut_bk, form_bk, pag_bk, acab_bk, preco_bk, capa_bk, coment1_bk, coment2_bk, coment3_bk, sinopse_bk) VALUES ('".$row["isbn_bk"]."', '".$row["ean_bk"]."', '".$row["datalanc_bk"]."', '".$row["tit_bk"]."', '".$row["tit_bk_alfa"]."', '".$row["titorig_bk"]."', ".$row["id_aut_bk"].", '".$row["form_bk"]."', ".$row["pag_bk"].", '".$row["acab_bk"]."', ".$row["preco_bk"].", '".$row["capa_bk"]."', '".$row["coment1_bk"]."', '".$row["coment2_bk"]."', '".$row["coment3_bk"]."', '".$row["sinopse_bk"]."')";

    mysqli_query($conexao, $sql);
}*/
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
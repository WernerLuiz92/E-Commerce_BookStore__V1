<?php include /*Este path deve ser definido manualmente*/'_session.php'; ?>
<?php
    $page = 1;
    $relpath = "";

    include $relpath.'_conexao.php';

    include $relpath.'header.php';
    include $relpath.'topbar.php';
    include $relpath.'navbar.php';

?>

<div>

</div>

<?php
    include $relpath.'footer.php';
?>
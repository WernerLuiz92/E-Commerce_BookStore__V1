<!-- Code -->
<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //include '_conexao.php';

?>
<!-- Code End -->

<!-- Head -->
<?php
    include 'header.php';
    $page = 1;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <h1>Site E-Commerce Werner!!! 1234</h1>
    <div>
        <?php
            echo "<h5>O usuário é: $user e a Senha é: $pass</h5>";
        ?>
    </div>
</div>
<!-- Body End -->

<!-- Footer -->
<?php
    include 'footer.php';
?>
<!-- Footer End -->
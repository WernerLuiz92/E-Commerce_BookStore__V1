<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="imagens/logo_site_werner.png" alt="Logo" class="rounded" style="width: 50px; height: 50px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($page == 1){echo 'active';} ?>">
                <a class="nav-link" href="index.php">Menu Inicial <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if ($page == 2 || $page == 3 || $page == 4){echo 'active';} ?>"
                    href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Cadastros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item <?php if ($page == 2){echo 'active';} ?>"
                        href="cadastro_produto.php">Produtos</a>
                    <a class="dropdown-item <?php if ($page == 3){echo 'active';} ?>"
                        href="cadastro_categoria.php">Categorias</a>
                    <!--<div class="dropdown-divider"></div>-->
                    <a class="dropdown-item <?php if ($page == 4){echo 'active';} ?>"
                        href="cadastro_fornecedor.php">Fornecedores</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if ($page == 5 || $page == 6 || $page == 7){echo 'active';} ?>"
                    href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Listar Cadastros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item <?php if ($page == 5){echo 'active';} ?>"
                        href="listar_produto.php">Produtos</a>
                    <a class="dropdown-item <?php if ($page == 6){echo 'active';} ?>"
                        href="listar_categoria.php">Categorias</a>
                    <!--<div class="dropdown-divider"></div>-->
                    <a class="dropdown-item <?php if ($page == 7){echo 'active';} ?>"
                        href="listar_fornecedor.php">Fornecedores</a>
                </div>
            </li>
            <li class="nav-item <?php if ($page == 8){echo 'active';} ?>">
                <a class="nav-link" href="aboutme.php">Sobre
                    mim!</a>
            </li>
        </ul>
    </div>
</nav>
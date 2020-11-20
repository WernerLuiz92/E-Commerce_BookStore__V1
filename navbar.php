<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
        <img src="images/logo_site_werner.png" width="30" height="30" class="d-inline-block align-top" alt=""
            loading="lazy">
        Store
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($page == 1){echo 'active';} ?>">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if ($page == 2 || $page == 3 || $page == 4){echo 'active';} ?>"
                    href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Produtos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item <?php if ($page == 2){echo 'active';} ?>" href="#">Cervejas</a>
                    <a class="dropdown-item <?php if ($page == 3){echo 'active';} ?>" href="#">Canecas</a>
                    <!--<div class="dropdown-divider"></div>-->
                    <a class="dropdown-item <?php if ($page == 4){echo 'active';} ?>" href="#">Acessórios</a>
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
                    nós!</a>
            </li>
        </ul>
        <form class="form-inline" action="_login.php" method="post">
            <div class="input-group" style="width: 150px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="user"><i class="fas fa-user-alt"></i></span>
                </div>
                <input type="text" class="form-control" name="user" placeholder="Usuário" aria-label="Username"
                    aria-describedby="user">
            </div>
            <div class="input-group" style="margin-left: 5px; width: 150px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="pass"><i class="fas fa-unlock-alt"></i></span>
                </div>
                <input type="password" class="form-control" name="pass" placeholder="Senha" aria-label="Username"
                    aria-describedby="pass">
            </div>
            <button class="btn btn-sm btn-outline-secondary" type="submit" style="margin-left: 5px;">Login</button>
        </form>
    </div>
</nav>
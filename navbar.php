<!--Navbar-->
<nav class="navbar sticky-top navbar-dark mdb-color">

    <!-- Navbar brand -->
    <button class="navbar-toggler third-button" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent22" aria-controls="navbarSupportedContent22" aria-expanded="false"
        aria-label="Toggle navigation">
        <a class="navbar-brand" href="#">Menu</a>
    </button>
    <section class="text-white">
        <!-- Breadcrumb>
        <div class="container mt-1">

            <nav aria-label="nav py-4 breadcrumb">
                <ol class="breadcrumb d-inline-flex pl-0 pt-0">
                    <li class="breadcrumb-item"><a class="text-white" href="list.php">BookStore</a></li>
                    <li class="breadcrumb-item active"><a class="text-white" href="list.php">Livros</a></li>
                    <li class="breadcrumb-item">Livro Atual</li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Generos</a></li>
                </ol>
            </nav>

        </div>
        <!-- /Breadcrumb-->
    </section>

    <!-- Login -->
    <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item mr-2">
            <a class="nav-link waves-effect waves-light">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li class="nav-item mr-2">
            <a class="nav-link waves-effect waves-light">
                <i class="fab fa-google-plus-g"></i>
            </a>
        </li>
        <li class="nav-item dropdown mr-2">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default"
                aria-labelledby="navbarDropdownMenuLink-333">
                <a class="dropdown-item" href="<?php echo $relpath;?>login.php">Entre</a>
                <a class="dropdown-item" href="<?php echo $relpath;?>cadastro.php">Cadastre-se</a>
            </div>
        </li>
    </ul>
    <!-- Login -->

    <!-- Collapse button -->
    <button class="navbar-toggler third-button" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent22" aria-controls="navbarSupportedContent22" aria-expanded="false"
        aria-label="Toggle navigation">
        <div class="animated-icon3"><span></span><span></span><span></span></div>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent22">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($page == 1){echo 'active';} ?>">
                <a class="nav-link" href="<?php echo $relpath;?>pages/book/list.php#books">Livros</a>
            </li>
            <li class="nav-item <?php if ($page == 2){echo 'active';} ?>">
                <a class="nav-link" href="<?php echo $relpath;?>pages/genre/list.php">Gêneros</a>
            </li>
            <li class="nav-item <?php if ($page == 3){echo 'active';} ?>">
                <a class="nav-link" href="<?php echo $relpath;?>pages/author/list.php">Autores</a>
            </li>
            <li class="nav-item <?php if ($page == 4){echo 'active';} ?>">
                <a class="nav-link" href="<?php echo $relpath;?>aboutme.php">Sobre nós!</a>
            </li>
        </ul>
        <!-- Links -->

    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
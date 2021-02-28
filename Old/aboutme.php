<?php include '_session.php'; ?>
<?php
    $page = 4;
    $relpath = "";

    include '_conexao.php';

    include 'header.php';
    include 'topbar.php';
    include 'navbar.php';

?>

<div>
    <div class="container">
        <div class="row">
            <div class="col-4" style="margin-top: 45px;">
                <center>
                    <img src="<?php echo $relpath;?>img/perfil.jpg" alt="Werner Luiz Gottschalt"
                        style="height: 85%; width: 85%;">
                </center>
            </div>
            <div class="col-8" style="margin-top: 20px;">
                <h3><b>Werner Luiz Gottschalt</b></h3>
                <p style="margin-top: 20px; font-weight: bold; color: grey;">
                <h4>Aluno do Curso Técnico em Informática
                    na E. T. E. 25 de Julho</h4>
                </p>
                <p>Oi, eu sou o Werner, apaixonado por aprender, por tecnologia e programação. Sou gamer e amo café!!
                </p>
                <p>Sou casado à 4 anos e não possuo filhos.
                    Hoje estou trabalhando fora da área que almejo trabalhar no futuro.</p>
                <p>Atualmente estou cursando o Técnico em Informática na Escola Técnica Estadual 25 de julho - Ijuí/RS.
                    Paralelamente estou me aprimorando em algumas tecnologias da área de desenvolvimento de softwares
                    como: PHP, MySQL, Bootstrap, JavaScript e mais alguns cursos da Udemy, todos voltados para esta
                    área.</p>
                <p>Possuo habilidades em Photoshop, Ferramentas do pacote Office, Inglês intermediário com boa leitura e
                    entendimento.
                    Futuramente pretendo estudar Engenharia de Software, além de aprender JAVA, Python entre outras
                    linguagens e tecnologias. Assim como pretendo estudar inglês.</p>

                <center>
                    <a class="btn btn-sm btn-elegant" href="https://github.com/WernerLuiz92" target="_blank"
                        role="button"><i class="fab fa-github fa-lg mr-2"></i>GitHub</a>
                    <a class="btn btn-sm btn-indigo" href="https://www.linkedin.com/in/werner-gottschalt/"
                        target="_blank" role="button"><i class="fab fa-linkedin fa-lg mr-2"></i>Linkedin</a>
                    <a class="btn btn-sm btn-light-green darken-4"
                        href="https://projetos-werner.000webhostapp.com/index.php" target="_blank" role="button"><i
                            class="fas fa-user-alt fa-lg mr-2"></i>Portfólio</a>
                    <a class="btn btn-sm btn-blue darken-4" href="https://www.facebook.com/werner.gottschalt/"
                        target="_blank" role="button"><i class="fab fa-facebook fa-lg mr-2"></i>Facebook</a>
                    <a class="btn btn-sm btn-green darken-1" href="https://wa.me/message/M65QOJIMJK6ZB1" target="_blank"
                        role="button"><i class="fab fa-whatsapp fa-lg mr-2"></i>WhatsApp</a>
                </center>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>
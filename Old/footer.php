<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 mt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">BookStore</h6>
                <p>Este site foi desenvolvido durante as aulas do curso técnico em informática,
                    na Escola Técnica Estadual 25 de Julho.</p>
                <p><b>Aluno:</b> Werner Luiz Gottschalt<br />
                    <b>Professor:</b> Dionatan H. Balboena<br />
                    <b>Turma:</b> 324
                </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Links</h6>
                <p>
                    <a href="https://escola25dejulho.com.br/">E. T. E. 25 de julho</a>
                </p>
                <p>
                    <a href="https://escola25dejulho.com.br/tecnico.php?id=1">Técnico em Informática</a>
                </p>
                <p>
                    <a href="https://www.wernergottschalt.com">Meu portfólio</a>
                </p>
                <p>
                    <a href="<?php echo $relpath;?>aboutme.php">Sobre mim</a>
                </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contato</h6>
                <p>
                    <i class="fas fa-home mr-3"></i>
                    Rua do Comércio, 1516 - Ijuí / RS
                </p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> gottschalt@hotmail.com
                </p>
                <p>
                    <i class="fab fa-whatsapp mr-3"></i> (55) 9-9133-4503
                </p>
                <p>
                    <i class="fas fa-phone-alt mr-3"></i> (55) 9-9180-8121
                </p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Footer links -->

        <hr>

        <!-- Grid row -->
        <div class="row d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">

                <!--Copyright-->
                <p class="text-center text-md-left">© 2020 Copyright:
                    <a href="https://www.wernergottschalt.com/">
                        <strong> wernergottschalt.com</strong>
                    </a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1"
                                href="https://github.com/WernerLuiz92">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1"
                                href="https://www.facebook.com/werner.gottschalt/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1"
                                href="https://www.linkedin.com/in/werner-gottschalt/">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1"
                                href="https://wa.me/message/M65QOJIMJK6ZB1">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1"
                                href="<?php echo $relpath;?>function/data/dataimport.php">
                                <i class=" fas fa-database"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

</footer>
<!-- Footer -->


<!-- jQuery -->
<script type="text/javascript" src="<?php echo $relpath;?>js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo $relpath;?>js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo $relpath;?>js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo $relpath;?>js/mdb.min.js"></script>

<!-- Scripts -->
<script type="text/javascript">
$(document).ready(function() {

    $('.first-button').on('click', function() {

        $('.animated-icon1').toggleClass('open');
    });
    $('.second-button').on('click', function() {

        $('.animated-icon2').toggleClass('open');
    });
    $('.third-button').on('click', function() {

        $('.animated-icon3').toggleClass('open');
    });
});
</script>

</body>

</html>
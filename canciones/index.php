<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../estilo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../estilo/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../estilo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Music is life</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.html" >Iniciar sesion</a>
                    </li>
                    <li class="page-scroll">
                        <a href="../registro/index.php">registrarse</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
              <!--  <img class="img-responsive" src="img/profile.png" alt=""> -->
                    <div class="intro-text">
                        <span class="name">Iniciar sesión</span>
                        <hr class="star-light">
                        <span class="skills">
                            <form action="checklogin.php" method="post">
                                <h3>Usuario</h3>
                                <input name="username" type="text" id="username" required id="color">
                                <br/><br/>

                                <h3>Contraseña</h3>
                                <input name="password" type="password" id="password" required id="color">
                                <br/><br/>

                                <input type="submit" href="#about" class="btn btn-primary btn-xl page-scroll" name="Submit" value="Enviar">
                            </form>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- BODY -->
<section id="generos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Generos</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">

                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <a href="reg_trap.php">
                        <img src="http://masterperiodismoces.com/wordpress/wp-content/uploads/2016/02/trap.jpg" width="250px" height="250px" class="img-responsive" alt="">
                        </a>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">

                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <a href="reg_techno">
                        <img src="http://www.radiorsk.info/wp-content/uploads/1970/03/techno-950x790.jpg" width="250px" height="250px" class="img-responsive" alt="">
                        </a>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">

                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <a href="reg_edm">
                        <img src="http://www.radiomushroom.fm/wp-content/uploads/2016/03/EDM_imagen.jpg" width="250px" height="250px" class="img-responsive" alt="">
                        </a>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">

                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <a href="reg_dnb.php">
                        <img src="http://kingofwallpapers.com/dnb/dnb-006.jpg" width="250px" height="250px" class="img-responsive" alt="">
                        </a>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
          <!--  <img class="img-responsive" src="img/profile.png" alt=""> -->
                <div class="intro-text">
                    <span class="name">TRAP</span>
                    <hr class="star-light">
                    <span class="skills">
                        <a href="reg_trap.php" method="post">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
          <!--  <img class="img-responsive" src="img/profile.png" alt=""> -->
                <div class="intro-text">
                    <span class="name">EDM</span>
                    <hr class="star-light">
                    <span class="skills">
                        <a href="reg_edm.php" method="post">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
          <!--  <img class="img-responsive" src="img/profile.png" alt=""> -->
                <div class="intro-text">
                    <span class="name">TECHNO</span>
                    <hr class="star-light">
                    <span class="skills">
                        <a href="reg_techno.php" method="post">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
          <!--  <img class="img-responsive" src="img/profile.png" alt=""> -->
                <div class="intro-text">
                    <span class="name">DNB</span>
                    <hr class="star-light">
                    <span class="skills">
                        <a href="reg_dnb.php" method="post">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>




    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above" align="center">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-lg-12">
                        <h3>Location</h3>
                        <p>I.E.S TRIANA
                            <br>Sevilla, España</p>
                    </div>                  
                </div>
            </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- jQuery -->
    <script src="../estilo/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../estilo/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../estilo/js/jqBootstrapValidation.js"></script>
    <script src="../estilo/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="estilo/js/freelancer.min.js"></script>

</body>

</html>
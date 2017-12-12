<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>
    
        
    

    <?php  
        session_start();
        switch ($_SESSION['tema']){
        case "plantilla2":
                echo '<link href="../estilo2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
                echo '<link href="../estilo2/css/freelancer.min.css" rel="stylesheet">';
                echo '<link href="../estilo2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">';
                echo '<script src="../estilo2/vendor/jquery/jquery.min.js"></script>';
                echo '<script src="../estilo2/vendor/bootstrap/js/bootstrap.min.js"></script>';
                echo '<script src="../estilo2/js/jqBootstrapValidation.js"></script>';
                echo '<script src="../estilo2/js/contact_me.js"></script>';
                echo '<script src="../estilo2/js/freelancer.min.js"></script>';
            break;
            
        case "plantilla3":
                echo '<link href="../estilo3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
                echo '<link href="../estilo3/css/freelancer.min.css" rel="stylesheet">';
                echo '<link href="../estilo3/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">';
                echo '<script src="../estilo3/vendor/jquery/jquery.min.js"></script>';
                echo '<script src="../estilo3/vendor/bootstrap/js/bootstrap.min.js"></script>';
                echo '<script src="../estilo3/js/jqBootstrapValidation.js"></script>';
                echo '<script src="../estilo3/js/contact_me.js"></script>';
                echo '<script src="../estilo3/js/freelancer.min.js"></script>';
            break;
        
        default:
           echo '<link href="../estilo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                 <link href="../estilo/css/freelancer.min.css" rel="stylesheet">
                 <link href="../estilo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                 <script src="../estilo/vendor/jquery/jquery.min.js"></script>
                 <script src="../estilo/vendor/bootstrap/js/bootstrap.min.js"></script>
                 <script src="../estilo/js/jqBootstrapValidation.js"></script>
                 <script src="../estilo/js/contact_me.js"></script>
                 <script src="../estilo/js/freelancer.min.js"></script>';
                
        }
    
    ?>
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
                    <li class="page-scroll">
                        <a href="modificar.php">modificar cuenta</a>
                    </li>
                    <li class="page-scroll">
                        <a href="../logueo/logout.php">Cerrar sesion</a>
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
                    <div class="intro-text">
                        <span class="name">ELECTRIK MUSIK</span>
                        <hr class="star-light">
                        <span class="skills">Tu web de música electronica, don't stop</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br></br>
    
    
    <br><br>
     <section id="contact">
        <div class="container">
			<ul class="nav">
                <li><a href="../graficas/script.php">Ver grafica de canciones</a></li>
			    <li><a href="eleccioncss.php">Elige el diseño de la pagina</a></li>
				<li><a href="../peticion/peticion.php">Peticion de canciones</a></li>
				<li><a href="../noticias/noticias.php">Noticias</a></li>
				<li><a href="comentarios.php">Comentarios</a></li>
			</ul>
		</div>
</section>
		<br></br>

    <!-- Portfolio Grid Section -->
    <section id="canciones">
        <div class="container" align="center">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Canciones</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                      <a href="../canciones/reg_trap.php">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://online-shirt-designer.ch/img/Designs/Designklein-16107210.png" width="250px" height="250px" class="img-responsive" alt="">
                      </a>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                      <a href="../canciones/reg_techno.php">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://geo-media.beatport.com/image_size/250x250/15191011.jpg" width="250px" height="250px" class="img-responsive" alt="">
                      </a>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                      <a href="../canciones/reg_edm.php">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://www.beatframe.com/images/playlists/edm.jpg" width="250px" height="250px" class="img-responsive" alt="">
                      </a>
                    </a>
                </div>
            </div>
        </div>    
            <div class="container" align="center">                
                <div class="col-sm-4 portfolio-item" align="center">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                      <a href="../canciones/reg_dnb.php">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://online-shirt-designer.ch/img/Designs/Designklein-12458661.png" width="250px" height="250px" class="img-responsive" alt="">
                      </a>
                    </a>
                </div>                
            </div>
    </section>

     <section id="directos">
        <div class="container" align="center">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Directos</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                      <a href="../directos/trap.php">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://img04.rl0.ru/f802f1193c242e9ee5049f61473edd12/c250x250/www.radiobells.com/stations/recordtrap.jpg" width="250px" height="250px" class="img-responsive" alt="">
                      </a>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                      <a href="../directos/techno.php">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://www.mixjunkies.com/wp-content/uploads/2011/06/i-love-techno-250x250.jpg" width="250px" height="250px" class="img-responsive" alt="">
                      </a>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                      <a href="../directos/edm.php">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://geo-media.beatport.com/image_size/250x250/13149068.jpg" width="250px" height="250px" class="img-responsive" alt="">
                      </a>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                      <a href="../directos/dnb.php">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://s3-eu-west-1.amazonaws.com/s3.dragonmedia.uk/media/radio/58027973366b1c43bfd890bc/f5eae2c9-6efb-4bb1-afbe-6543eb61f0bf-lg.jpg" width="250px" height="250px" class="img-responsive" alt="">
                      </a>
                    </a>
                </div>
            </div>
         </div>
    </section>

     <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sube el volumen</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-4">
                    <p>Simplemente enfocado a tu música favorita, ENJOY IT!</p>
                </div>
            </div>
        </div>
    </section>

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
    



</body>

</html>
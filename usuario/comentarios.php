<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <<?php  
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
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                      <li class="page-scroll">
                        <a href="../usuario/index.php">Volver</a>
                    </li>
                    <li class="page-scroll">
                        <a href="../logueo/logout.php">Cerrar Sesion</a>
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
                        <label class="name">ELECTRIK MUSIK</label>
                        <hr class="star-light">
                        <label class="skills">Tu web de música electronica, don't stop</label>
                    </div>
					<br></br>
					
            </div>
        </div>
    </header>



    <!-- Portfolio Grid Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Mejora tu web</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <?php
                    //si la conexion es distinta a la de admin te redirige a la pagina principal y si no crea la conexion
                    if ($_SESSION["rol"]!='usuario'){
                            session_destroy();
                            header("Location:../");
                    }else{
                            $connection = new mysqli("localhost", "root", "", "proyectophp");
                            //TESTING IF THE CONNECTION WAS RIGHT
                            if ($connection->connect_errno) {
                                printf("Connection failed: %s\n", $connection->connect_error);
                                exit();
                            }
                    }
                    //Si el rol "NO" es usuario redirigir a index.php
                

            //para que el usuario pueda pedir un comentario le pasamos el nombre 

            if (!isset($_POST["nombre"])) : ?>                   

                    <form method="post">
                      <legend>Inserte comentario</legend>
                      <fieldset>
                        <br>
                        <span>Nombre de usuario: </span><input type="text" name="nombre"><br/><br/>
                        <span>Comentario: </span><textarea rows="4" cols="50" input type="text" name="comentario"></textarea><br/><br/>
                            <input class="btn btn-primary btn-xl page-scroll" name="Submit" value="Enviar" type="submit" >
                      </fieldset>
                    </form>

                <?php else: ?>
                <?php 
                //cargamos en nuevas variables los campos del formulario
                $nomb=$_POST['nombre'];
                $coment=$_POST['comentario'];
            
                //hacemos la insercion con las variables anterios y null porque es un campo autocompletado
                $consulta= "INSERT INTO comentarios VALUES('null','$nomb','$coment')";
                    $result = $connection->query($consulta);
                    //si la insercion no se lleva a cabo nos mostrara un error    
                    if (!$result) {

                        echo "<br/><br/><br/><br/><br/><br/>";
                        echo "<h2 id='homeHeading'>Error en la inserción de los datos</h2>";
                        echo "<br/><br/><br/>";

                    //en caso contrario nos insertará el comentario
                    } else {

                        echo "<br/><br/><br/><br/><br/><br/>";
                        echo "<h3 id='homeHeading'>El comentario se ha enviado correctamente</h3>";
                        echo "<br/><br/>";
                        echo "<h3 id='homeHeading'><a href='../usuario/index.php'>volver</a></h3>";
                        echo "<br/><br/>";
                    }
    
                    ?>
                <?php endif ?>
        </div>
         <br></br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Máximo de caracteres permitidos por comentario: <font color="red">5000</font></h3>
                    <br></br>
                    <h4>El administrador asiduamente ve los comentarios escritos por vosotros e intenta en la medida de lo posible mejorar la página web, un saludo a todos</h4>
                </div>
            </div>
        </div>
        <br></br>
    </section>
    <!-- Contact Section -->
    
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>ENJOY</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Beats_Music_logo.svg/250px-Beats_Music_logo.svg.png"></img>
                </div>
                <div class="col-lg-4 col-lg-offset-1">
                    <img src="http://3.bp.blogspot.com/-FbUDnXFXos0/UG3kzQL2NZI/AAAAAAAAACo/WAHTHsrZblw/s250/i%2Blove%2Bmusic.jpg"></img>
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
    <script src="../estilo/js/freelancer.min.js"></script>

</body>

</html>

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
      <?php
    
    session_start();
    //$_SESSION['cambiocss'];
    
        if (isset($_POST['plantilla'])) {
            $nuevocambio=$_POST['plantilla'];
            $_SESSION['cambiocss'] = $nuevocambio;

                    //si la conexion es distinta a la de admin te redirige a la pagina principal y si no crea la conexion
                    if ($_SESSION["rol"]!='usuario'){
                            session_destroy();
                            header("Location:../");
                    }else{
                            include '../conexion.php';
                    }
           $consulta = "UPDATE usuarios SET tema = '".$nuevocambio."' where cod_usuario = ".$_SESSION['cod_usuario']; 
            $_SESSION['tema'] = $nuevocambio;
            
            if($nuevocambio == 'plantilla1')
            {
                echo '<link href="../estilo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
                echo '<link href="../estilo/css/freelancer.min.css" rel="stylesheet">';
                echo '<link href="../estilo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">';
                echo '<script src="../estilo/vendor/jquery/jquery.min.js"></script>';
                echo '<script src="../estilo/vendor/bootstrap/js/bootstrap.min.js"></script>';
                echo '<script src="../estilo/js/jqBootstrapValidation.js"></script>';
                echo '<script src="../estilo/js/contact_me.js"></script>';
                echo '<script src="../estilo/js/freelancer.min.js"></script>';           
                $result = $connection->query($consulta);
                if (!result){
                    echo "No se ha guardado";
                }
            }
                
            else if ($nuevocambio == 'plantilla2')
            {
                echo '<link href="../estilo2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
                echo '<link href="../estilo2/css/freelancer.min.css" rel="stylesheet">';
                echo '<link href="../estilo2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">';
                echo '<script src="../estilo2/vendor/jquery/jquery.min.js"></script>';
                echo '<script src="../estilo2/vendor/bootstrap/js/bootstrap.min.js"></script>';
                echo '<script src="../estilo2/js/jqBootstrapValidation.js"></script>';
                echo '<script src="../estilo2/js/contact_me.js"></script>';
                echo '<script src="../estilo2/js/freelancer.min.js"></script>';
                $result = $connection->query($consulta);
                if(!$result){
                    echo "Lo siento no se guardo en la BBDD";
                }
                
            }
            else if ($nuevocambio == 'plantilla3')
            {
                echo '<link href="../estilo3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
                echo '<link href="../estilo3/css/freelancer.min.css" rel="stylesheet">';
                echo '<link href="../estilo3/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">';
                echo '<script src="../estilo3/vendor/jquery/jquery.min.js"></script>';
                echo '<script src="../estilo3/vendor/botstrap/js/bootstrap.min.js"></script>';
                echo '<script src="../estilo3/js/jqBootstrapValidation.js"></script>';
                echo '<script src="../estilo3/js/contact_me.js"></script>';
                echo '<script src="../estilo3/js/freelancer.min.js"></script>';
            
               $result = $connection->query($consulta);
                if (!result){
                    echo "No se ha guardado";
                }
            }
        } else {
            echo '<link href="../estilo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
            echo '<link href="../estilo/css/freelancer.min.css" rel="stylesheet">';
            echo '<link href="../estilo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">';
            echo '<script src="../estilo/vendor/jquery/jquery.min.js"></script>';
            echo '<script src="../estilo/vendor/bootstrap/js/bootstrap.min.js"></script>';
            echo '<script src="../estilo/js/jqBootstrapValidation.js"></script>';
            echo '<script src="../estilo/js/contact_me.js"></script>';
            echo '<script src="../estilo/js/freelancer.min.js"></script>';
          
        }

    ?>
        
    
    

    <!-- Theme CSS -->

    <!-- Custom Fonts -->
    
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
                        <span class="skills">Tu web de musica electronica, don't stop</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <?php
    

        if ($_SESSION["rol"] != "usuario") {
            header('Location: ../index.html');
        } else {
            $connection = new mysqli("localhost", "root", "", "proyectophp"); 
            //Metemos en una variable, el nombre a travÃ©s del $_session
            $id_usu=$_SESSION['username'];
            //hacemos la consulta comparando los nombres de la BD con nuestro usuario logueado
        }
            
        echo '<form name="tema" id="tema" method="post" action="eleccioncss.php">';
            echo'<label>Tema a elegir</label>';
            echo'<select class="form-control" name="plantilla" placeholder="tema" id="tema">';
                echo'<option value="pantilla1">Plantilla1</option>';
                echo'<option value="plantilla2">Plantilla2</option>';
                echo'<option value="plantilla3">Plantilla3</option>';
            echo'</select>';
        echo'<button type="submit" class="btn btn-default" name="tema">Elegir tema</button>';
    
            echo"<br></br>";
            echo "</li>";
                echo "<a href='index.php'>Volver</a>";
            echo "</li>";
   ?>
   

           
   
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
                    <p>Simplemente enfocado a tu mÃºsica favorita, ENJOY IT!</p>
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
                            <br>Sevilla, EspaÃ±a</p>
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

    

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    
    

    <!-- Theme JavaScript -->
   

</body>

</html>

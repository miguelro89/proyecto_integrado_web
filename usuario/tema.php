<?php
        if (isset($_POST['plantilla'])) {
            $nuevocambio=$_POST['plantilla'];
            echo "hola mundo";
            echo $_POST['plantilla'];
            $_SESSION['cambiocss'] = $nuevocambio;
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
           $consulta = "UPDATE usuarios SET tema = '".$nuevocambio."' where cod_usuario = ".$_SESSION['cod_usuario']; 
            
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
        
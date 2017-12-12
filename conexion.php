<?php define("HOST", "localhost",true);define("USER", "root",true);define("PASSWORD", "",true);define("DB", "pruebabd",true);define("PATH","localhost:8080/pruebainstalador",true);$connection = new mysqli(HOST,USER,PASSWORD,DB);
            if ($connection->connect_error) {
             die("La conexion ha fallado: " . $connection->connect_error);
            } ?>
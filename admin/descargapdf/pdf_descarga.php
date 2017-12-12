
<?php

  session_start();

  if ($_SESSION["rol"]!='admin'){
       session_destroy();
     header("Location:../");
  }  else{
     include '../../conexion.php';
  }

include_once("../../libreria/fpdf.php");


if ($_GET["toprint"] == 'usuarios' ) {

class PDF extends FPDF

{

function Footer ()

{

$this->SetY(-10);

$this->SetFont('Arial','I',10);

$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

}

}

//$pdf=new PDF();

$pdf=new FPDF('L','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','',10);
    
$pdf->Cell(36,5,"cod_usuario");

$pdf->Cell(36,5,"nombre");

$pdf->Cell(36,5,"apellidos");

$pdf->Cell(46,5,"correo_electronico");

$pdf->Cell(36,5,"rol");

$pdf->Cell(46,5,"password");


$pdf->ln();

if($result= $connection->query("SELECT * FROM usuarios")) {

while ($obj = $result -> fetch_object()) {
    

$pdf->Cell(36,5,$obj->cod_usuario,1,0,'C');

$pdf->Cell(36,5,$obj->nombre,1,0,'C');

$pdf->Cell(36,5,$obj->apellidos,1,0,'C');

$pdf->Cell(46,5,$obj->correo_electronico,1,0,'C');

$pdf->Cell(36,5,$obj->rol,1,0,'C');

$pdf->Cell(66,5,$obj->password,1,0,'C');


$pdf->ln();

}

}

$pdf->output();

}
if ($_GET["toprint"] == 'canciones' ) {

class PDF extends FPDF

{

function Footer ()

{

$this->SetY(-10);

$this->SetFont('Arial','I',10);

$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

}

}

//$pdf=new PDF();

$pdf=new FPDF('L','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','',10);
    
    
$pdf->Cell(26,5,"id_cancion");
    
$pdf->Cell(56,5,"nombre_cancion");

$pdf->Cell(66,5,"autores");

$pdf->Cell(26,5,"ao_publicacion");

$pdf->Cell(26,5,"id_genero");

$pdf->Cell(46,5,"enlace_youtube");


$pdf->ln();

if($result= $connection->query("SELECT * FROM canciones")) {

while ($obj = $result -> fetch_object()) {
    

$pdf->Cell(26,5,$obj->id_cancion,1,0,'C');    

$pdf->Cell(56,5,$obj->nombre_cancion,1,0,'C');

$pdf->Cell(66,5,$obj->autores,1,0,'C');

$pdf->Cell(26,5,$obj->ao_publicacion,1,0,'C');

$pdf->Cell(26,5,$obj->id_genero,1,0,'C');

$pdf->Cell(86,5,$obj->enlace_youtube,1,0,'C');


$pdf->ln();

}

}

$pdf->output();

}
if ($_GET["toprint"] == 'videos' ) {

class PDF extends FPDF

{

function Footer ()

{

$this->SetY(-10);

$this->SetFont('Arial','I',10);

$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

}

}

//$pdf=new PDF();

$pdf=new FPDF('L','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','',10);
    
$pdf->Cell(26,5,"id_video");

$pdf->Cell(46,5,"nombre_sesion");

$pdf->Cell(46,5,"deejay");

$pdf->Cell(46,5,"lugar");

$pdf->Cell(94,5,"enlace_video");

$pdf->Cell(30,5,"genero");


$pdf->ln();

if($result= $connection->query("SELECT * FROM videos")) {

while ($obj = $result -> fetch_object()) {
    
$pdf->Cell(26,5,$obj->id_video,1,0,'C');

$pdf->Cell(46,5,$obj->nombre_sesion,1,0,'C');

$pdf->Cell(46,5,$obj->deejay,1,0,'C');

$pdf->Cell(46,5,$obj->lugar,1,0,'C');

$pdf->Cell(95,5,$obj->enlace_video,1,0,'C');

$pdf->Cell(15,5,$obj->genero,1,0,'C');


$pdf->ln();

}

}

$pdf->output();

}



?>

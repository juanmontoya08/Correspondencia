<?php

	require '../../config.php';
	require '../../inc/session.php';
	include 'plantilla.php';
	require 'conexion.php';
	include '../../inc/home_core.php';

if($_session->isLogged() == false)
	header('Location: ../../index.php');


	if($_POST){

		if(!empty($_POST['mes1']) and !empty($_POST['mes2'])){
		$fecha1= $_POST['mes1'];
		$fecha2= $_POST['mes2'];
			$query=$_home->fechar($fecha1, $fecha2);
		}
		else if (empty($_POST['mes1']) and empty($_POST['mes2']) and !empty($_POST['box1'])){
	$fecha= $_POST['box1'];
	$query=$_home->get_report($fecha);
	}
	else if(empty($_POST['mes1']) or empty($_POST['mes2']) and empty($_POST['box1'])){ $query="SELECT * FROM cor_correspondencia";}

	}


else $query="SELECT * FROM cor_correspondencia";



	$resultado = $mysqli->query($query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(255, 228, 225);
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(12,8,'#', 'B', 0,'L');
	$pdf->Cell(57,8,'RECEPTOR', 'B', 0,'L');
	$pdf->Cell(50,8,'REMITENTE',  'B', 0,'L');
	$pdf->Cell(57,8,'GUIA',  'B', 0,'L');
	$pdf->MultiCell(15,4,'FECHA/HORA',  'B','L');

$totalpre=0;
$totalpend=0;
$totaltermin=0;

	while($row = $resultado->fetch_assoc())
	{
	$totalpre = $totalpre+1;
	$pdf->SetFont('Arial','I',7);

	$pdf->Cell(12,10,$row['nRadicado'], 'B', 0,'L');
	$pdf->Cell(57,10,utf8_decode($row['receptor']), 'B', 0,'L');
	$pdf->Cell(50,10,utf8_decode($row['remitente']), 'B', 0,'L');
	$pdf->Cell(57,10,utf8_decode($row['nGuia']), 'B', 0,'L');
	$pdf->MultiCell(15,5,$row['fecha'].$row['hora'], 'B', 'L');
	}
$pdf->SetFont('Arial','I',9);



	$pdf->Cell(0,8,'Total : '.$totalpre,0,1,'L');

	$pdf->Output();
?>
<?php
	require 'conexion.php';
	include 'plantillat.php';

	include '../../inc/items_core.php';

	$pdf = new PDF('L', 'mm', array(110.00,40.00));
	$pdf->AddPage();
	$pdf->SetY(5);
	$pdf->SetFont('Courier','B',12);
	$pdf->Cell(54,0,'RADICADO: '.$_items->get_radicado2(), 0,'L');
	$pdf->Cell(1,0,'RADICADO: '.$_items->get_radicado2(), 0,'C');
	$pdf->Output();
?>
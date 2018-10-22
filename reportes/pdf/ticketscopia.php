<?php
	require 'conexion.php';
	include 'plantillat.php';

	include '../../inc/items_core.php';

	$pdf = new PDF('L', 'mm', array(110.00,40.00));
	$pdf->AddPage();
	$pdf->SetY(2);
	$pdf->SetFont('Courier','B',14);
	$pdf->Cell(56,0,'RADICADO: '.$_items->get_radicado2(), 0,'L');
	$pdf->Cell(2,0,'RADICADO: '.$_items->get_radicado2(), 0,'C');
	$pdf->Output();
?>
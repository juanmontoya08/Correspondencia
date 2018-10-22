<?php

require 'fpdf/fpdf.php';

	class PDF extends fpdf
	{


		function Header()
		{

			$this->Image('images/cropped-logo2.png',5,5,50);

			$this->SetFont('Helvetica','B',19);
			$this->Cell(50);
			$this->Cell(100,20,'REPORTE CORRESPONDENCIA', 0,0,'C');
			$this->Ln(10);
			$this->SetFont('Helvetica','',15);
	$this->Ln(20);
	$this->SetFont('Helvetica','I',12);

		}

		function Footer()
		{
			$this->SetY(-25);
			$this->SetFont('Arial','I',8);
			$this->Cell(0,10,'Fecha: '.date('d/m/Y'),0,0,'L');
			$this->Cell(0, 10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}

?>
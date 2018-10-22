<?php
date_default_timezone_set('America/Bogota'); 
date('H:i:s');
require 'fpdf/fpdf.php';

	class PDF extends fpdf
	{


		function Header()
		{
			$this->Image('images/CISP-NEGRO.jpg',4,2,4);
			$this->Image('images/CISP-NEGRO.jpg',58,2,4);
		}

		function Footer()
		{
			$this->SetY(10);
			$this->SetFont('Courier','B',10);
			$this->Cell(54,0,'FECHA: '.date('d/m/Y'),0,0,'L');
			$this->Cell(2,0,'FECHA: '.date('d/m/Y'),0,0,'L');
			$this->Ln(3);
			$this->Cell(54,0,'HORA:  '.date('H:i:s'),0,0,'L');
			$this->Cell(2,0,'HORA:  '.date('H:i:s'),0,0,'L');

		}
	}

?>
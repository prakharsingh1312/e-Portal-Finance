<?php
require('../fpdf.php');
require('html_table/html_table.php');


class PDFS extends FPDF
{
// Page header
function Header()
{
	// Logo
	$this->Image('imgs/logo.png',10,6,15,15);
	// Arial bold 15
	$this->SetFont('Arial','B',10);
	// Move to the right
	$this->Cell(20);
	// Title
	$this->Cell(0,7,' DR. B. R. AMBEDKAR NATIONAL INSTITUTE OF TECHNOLOGY, JALANDHAR-144011',0,0,'C');
	// Line break
	$this->Ln(5);
}

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-35);
	$html='<table border="1">
	<tr>
	<td width="200" height="30">cell 1</td><td width="200" height="30" bgcolor="#D0D0FF">cell 2</td>
	</tr>
	<tr>
	<td width="200" height="30">cell 3</td><td width="200" height="30">cell 4</td>
	</tr>
	</table>';

	$this->WriteHTML($html);
}
}

// Instanciation of inherited class
$pdf = new PDFS();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
	$pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>

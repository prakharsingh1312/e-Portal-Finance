<?php
require('../fpdf.php');
require('html_table/html_table.php');


class PDFS extends PDF
{
// Page header
function Header()
{
	// Logo
	$this->Image('imgs/logo.png',10,6,15,15);
	// Arial bold 15
	$this->SetFont('Arial','B',10);
	// Move to the right
	$this->Cell(10);
	// Title
	$this->Cell(0,3,' DR. B. R. AMBEDKAR NATIONAL INSTITUTE OF TECHNOLOGY, JALANDHAR-144011',0,0,'C');
	// Line break
	$this->Ln(5);
}
}


// Instanciation of inherited class
$pdf = new PDFS();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',7);
$pdf->cell(15);
$pdf->Cell(0,10,'PROPOSAL FOR ATTENDING NATIONAL CONFERENCE / TRAINING COURSES / OTHERS UNDER',0,1,'C');
$pdf->Cell(0,3,'TEQIP-III Annexure "A"',0,1,'C');
$pdf->ln(15);

//start table
$pdf->cell(10,7,'',0,0);
$pdf->cell(100,7,'1. Name of the Student(Full time):',1,0);
$pdf->cell(70,7,'1.1 Course:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(85,7,'2. Roll Number:',1,0);
$pdf->cell(85,7,'3. Department:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'4. Nature of Event:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'5. Name of Event:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->MultiCell(170,7,'6. Place (S) of the event (Visit) Conference /  Training Course /  Workshop Seminar / Symposium / Others (Complete Address):   lace (S) of the event (Visit) Conference /  Training Course /  lace (S) of the event (Visit) Conference /  Training Course /  lace (S) of the event (Visit) Conference /  Training Course /  ',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'','LRB',1);


$pdf->Output();
?>

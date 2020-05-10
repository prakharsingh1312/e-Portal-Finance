<?php
require('../fpdf.php');



class PDF extends FPDF
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
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','BU',7);
$pdf->cell(15);
$pdf->Cell(0,10,'Requisition Performa for Purchase',0,1,'C');

$pdf->ln(15);

//start table
$pdf->SetFont('Arial','B',7);
$pdf->cell(10,15,'',0,0);
$pdf->cell(170,15,'1.  Name of the Department/ Centre :',1,1);

$pdf->cell(10,15,'',0,0);
$pdf->cell(170,15,'2.  Project Name	/ Research Topic :',1,1);

$pdf->cell(10,15,'',0,0);
$pdf->cell(170,5,'','TLR',1);
$pdf->cell(10,15,'',0,0);
$pdf->MultiCell(170,5,'3.  Name of the Item/ Machine Equipment /
     Instrument/ Software/ journal/ etc & Qty. :','LR',1);
$pdf->cell(10,15,'',0,0);
$pdf->cell(170,5,'','BLR',1);
//$pdf->cell(5,7,'3. Department:',1,1);

$pdf->cell(10,15,'',0,0);
$pdf->cell(170,15,'4.	Estimated Cost of the item / Machine /   Equipment / Instrument / Software / Journals / etc :',1,1);

$pdf->cell(10,15,'',0,0);
$pdf->cell(170,15,'5.  Technical Specifications (Source of information e.g. leaflet, Office record etc) to be attached
:',1,1);

$pdf->cell(10,15,'',0,0);
$pdf->cell(170,15,'6.  List of Manufacturer / Supplier With address :',1,1);

$pdf->cell(10,15,'',0,0);
$pdf->MultiCell(170,15,'7.  Justification of package : ',1,1);

$pdf->cell(10,15,'',0,0);
$pdf->cell(170,15,'8.  Name of Indentor with Designation :',1,1);

$pdf->cell(10,15,'',0,0);
$pdf->cell(170,15,'9. Remarks, if any :',1,1);



$pdf->SetY(-50);

$pdf->cell(10,7,'',0,0);
$pdf->cell(85,18,'','TLR',0);
$pdf->cell(85,18,'','TLR',1);


$pdf->cell(10,7,'',0,0);
$pdf->cell(85,7,'(Signature of Head of Department / Centre)','BLR',0,'C');
$pdf->cell(85,7,'Signature of the Intendor','BLR',1,'C');
// $pdf->MultiCell(70,7,'22. Recommended/ Not recommended by HoD','TLR',1);


// $pdf->MultiCell(70,6,'

// Signature (with seal) of the HoD:','BLR',1);


$pdf->Output();
?>

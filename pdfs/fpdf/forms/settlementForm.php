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
$pdf->SetFont('Arial','B',9);
$pdf->cell(15);
$pdf->Cell(0,10,'Claim Settlement Form for Any Event ',0,1,'C');
$pdf->Cell(0,3,'(STC/FDP/Seminar/Workshop/National or International Conference/ Motivational Lecture/Student Events)',0,1,'C');
$pdf->ln(15);

//start table
$pdf->SetFont('Arial','B',7);
$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'1. Title of Event :',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'2. Organizing Department/Centre :',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'3. Coordinator(s)/Convenor
Name & Designation :',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'4. Duration and Dates of conduct of Event (Programme Schedule to be attached) :',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->rect(20,71,170,19);
$pdf->cell(170,2,'',0,1);
$pdf->cell(10,7,'',0,0);
$pdf->Cell(50,5,'5. Nature of the Programme (Please tick) :','L',0);
$pdf->MultiCell(120,5,'Awareness / Motivational Programs/ Workshops / Training / Seminars/ Conferences / Exhibitions of Innovative Products / E- Summits / Tech Fests / Hackathons / Competition / Book-Camp / Exchange Programs /Students related programme/ Other Related Programs','R',1);
$pdf->cell(10,7,'',0,0);
$pdf->cell(170,2,'',0,1);
//$pdf->cell(5,7,'3. Department:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'6. Whether Advance taken (Please tick) :  Yes / No',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'7. Advance Funding agency (if any) : TEQIP-III/ Institute Main Account',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'8. Associated Institute/Organization (if any): ',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->MultiCell(170,7,'9. List of Resource Persons/Experts (to be attached) : ',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'10.	Number of participants: (Feed Back Form to be attached)',0,1);
$pdf->cell(20,7,'',0,0);
$pdf->cell(25,7,'Internal Faculty','TBLR',0);
$pdf->cell(25,7,'External Faculty','TBLR',0);
$pdf->cell(25,7,'Internal Students','TBLR',0);
$pdf->cell(25,7,'Outside Students','TBLR',0);
$pdf->cell(25,7,'Industrial Persons','TBLR',0);
$pdf->cell(25,7,'Others (specify)','TBLR',1);
$pdf->cell(20,7,'',0,0);
$pdf->cell(25,10,'',1,0);
$pdf->cell(25,10,'',1,0);
$pdf->cell(25,10,'',1,0);
$pdf->cell(25,10,'',1,0);
$pdf->cell(25,10,'',1,0);
$pdf->cell(25,10,'',1,1);
$pdf->rect(20,111,170,34);
$pdf->cell(180,3,'',0,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'11. Brief Report of the Programme (Attach report of sheet) :','BRL',1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'12. Indicate any other noteworthy features of this programme :','BRL',1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'13. Bank Account Number (if any) of Conference/Event :','BRL',1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'14. Expenditure incurred against Amount :',0,1);
$pdf->cell(20,7,'',0,0);
$pdf->cell(60,7,'Expenditure for the Event','TBLR',0);
$pdf->cell(30,7,'Receipts (A) *','TBLR',0);
$pdf->cell(30,7,'Expenditure (B) *','TBLR',0);
$pdf->cell(30,7,'Balance Fund (A-B)@','TBLR',1);
$pdf->cell(20,7,'',0,0);
$pdf->cell(60,7,'Advance',1,0);
$pdf->cell(30,7,'',1,0);
$pdf->cell(30,7,'',1,0);
$pdf->cell(30,7,'',1,1);

$pdf->cell(20,7,'',0,0);
$pdf->cell(60,7,'TEQIP-III',1,0);
$pdf->cell(30,7,'',1,0);
$pdf->cell(30,7,'',1,0);
$pdf->cell(30,7,'',1,1);

$pdf->cell(20,7,'',0,0);
$pdf->cell(60,7,'Registration fees etc',1,0);
$pdf->cell(30,7,'',1,0);
$pdf->cell(30,7,'',1,0);
$pdf->cell(30,7,'',1,1);

$pdf->cell(20,7,'',0,0);
$pdf->cell(60,7,'Total',1,0);
$pdf->cell(30,7,'',1,0);
$pdf->cell(30,7,'',1,0);
$pdf->cell(30,7,'',1,1);

$pdf->cell(20,5,'',0,0);
$pdf->cell(160,5,'*Detailed list to be attached.',0,1);
$pdf->cell(20,5,'',0,0);
$pdf->cell(160,5,'@To be deposited with the Institute Account alongwith Proof',0,1);
$pdf->rect(20,166,170,53);
$pdf->cell(180,1,'',0,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'15. Bank Statement for the effective period	:','BRL',1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'15. Bank Statement for the effective period	:','BRL',1);

$pdf->cell(10,7,'',0,0);
$pdf->rect(20,233,170,19);
$pdf->cell(170,2,'',0,1);
$pdf->cell(10,7,'',0,0);
$pdf->Cell(77,5,'16. List of Payees (if any alongwith Details-A/C No., IFSC Code) :',0,0);
$pdf->MultiCell(120,5,'1._______________________
2._______________________
3._______________________',0,1);
$pdf->cell(10,7,'',0,0);
$pdf->cell(170,2,'',0,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'17. Events Photograph : 4-5 both Softcopy and Hardcopy',1,1);

$pdf->SetFont('Arial','BI',7);
$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'Certified that the above information are correct and claim submitted is verified as per norms of the Institute. Recommended for adjustment.',0,1);
$pdf->AddPage('P','A4');


// $pdf->SetY(-50);
$pdf->ln(10);
$pdf->SetFont('Arial','B',7);
$pdf->cell(10,7,'',0,0);
$pdf->cell(50,10,'','TLR',0);
$pdf->cell(70,10,'','TLR',0);
$pdf->cell(50,10,'','TLR',1);


$pdf->cell(10,7,'',0,0);
$pdf->cell(50,7,'Principal Coordinator/Convenor','BLR',0,'C');
$pdf->cell(70,7,'Head of Department/Centre (With department seal)','BLR',0,'C');
$pdf->cell(50,7,'Registrar','BLR',1,'C');
// $pdf->MultiCell(70,7,'22. Recommended/ Not recommended by HoD','TLR',1);


// $pdf->MultiCell(70,6,'

// Signature (with seal) of the HoD:','BLR',1);


$pdf->Output();
?>

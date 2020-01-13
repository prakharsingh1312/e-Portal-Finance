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
$pdf->SetFont('Arial','B',7);
$pdf->cell(15);
$pdf->Cell(0,10,'PROPOSAL FOR ATTENDING NATIONAL CONFERENCE / TRAINING COURSES / OTHERS UNDER',0,1,'C');
$pdf->Cell(0,3,'TEQIP-III Annexure "A"',0,1,'C');
$pdf->ln(15);

//start table
$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'1. Name of the Student(Full time):',1,0);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'1.1 Course:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'2. Roll Number:',1,1);
//$pdf->cell(5,7,'3. Department:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'3. Department:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'4. Nature of Event:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'5. Name of Event:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->MultiCell(170,4,'6. Place (S) of the event (Visit) Conference /  Training Course /  Workshop Seminar / Symposium / Others (Complete Address): ',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'7. Duration required for the event with date (S) : From______________To ______________No. Of days:___',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'8. Organizer of the event:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'9. Relevance of the visit / training: (Attach Separate Sheet, if required)',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'10. Clear objective and outcome of the visit: (Attach Separate Sheet, if required)',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'11. Attach (i) brief CV / biography ',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'12. Attach certificate from HoD regarding relevance of the event for the applicant and by stating that the event will benefit for the applicant',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'13. Date and time of departure from the Institute:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'14. Date and time of arrival from the Institute:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'15.  Whether going to present research paper :',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'16. Title of Paper',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'17. Attach the accepted paper, acceptance letter, NOC from co-authors:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->MultiCell(170,4,'18. Total cost involved Rs. ______________________ (Rupees ___________________ Only) 
Please give cost details (Attach separate sheet , if necessary)
Registration Fee:_________________
TA: ________________
Others, If any (Special)',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'19. CGPA of the candidate (Only for UG / M.Tech and M.Sc students) : ',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->MultiCell(170,4,'20. For M.Tech, M.Sc and PhD candidates : Whether one paper has been accepted for publication in SCI Journal in Last two years (State Yes / No and attach the acceptance letter): ',1,1);

$pdf->SetY(-50);

$pdf->cell(10,7,'',0,0);
$pdf->cell(50,7,'20. Signature of the student','TLR',0);
$pdf->cell(50,7,'21. Signature of the Supervisor','TLR',0);
$pdf->MultiCell(70,7,'22. Recommended/ Not recommended by HoD','TLR',1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(50,18,'','BLR',0);
$pdf->cell(50,18,'','BLR',0);
$pdf->MultiCell(70,6,'

Signature (with seal) of the HoD:','BLR',1);


$pdf->Output();
?>

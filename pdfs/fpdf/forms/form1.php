<?php
require('../fpdf.php');
require('../fpdf_merge.php');
require('../../../assets/php/functions.php');
function url($data){
	return "File Attached.";
}
if(isset($_GET['id'])){
	$result=render_form1_pdf($_GET['id']);


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
$pdf->cell(170,7,'1. Name of the Student(Full time): '.$result['name_of_student'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'1.1 Course: '.$result['course'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'2. Roll Number: '.$result['roll_no'],1,1);
//$pdf->cell(5,7,'3. Department:',1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'3. Department: '.$result['department'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'4. Nature of Event: '.$result['nature_of_event'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'5. Name of Event: '.$result['name_of_event'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->MultiCell(170,4,'6. Place (S) of the event (Visit) Conference /  Training Course /  Workshop Seminar / Symposium / Others (Complete Address): '.$result['place_of_event'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'7. Duration required for the event with date (S) : From '.$result['duration_from'].' To '.$result['duration_to'].' No. Of days: '.$result['duration_days'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'8. Organizer of the event: '.$result['organizer_of_event'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'9. Relevance of the visit / training: (Attach Separate Sheet, if required) '.($result['relevance_file']=="Y"?url($result['relevance_of_visit']):$result['relevance_of visit']),1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'10. Clear objective and outcome of the visit: (Attach Separate Sheet, if required)'.($result['objective_file']=="Y"?url($result['objective_of_visit']):$result['objective_of visit']),1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'11. Attach (i) brief CV / biography : '.url($result['attached_cv']),1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'12. Attach certificate from HoD regarding relevance of the event for the applicant and by stating that the event will benefit for the applicant:  '.url($result['attached_certificate_hod']),1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'13. Date and time of departure from the Institute: '.$result['date_and_time_departure'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'14. Date and time of arrival from the Institute: '.$result['date_and_time_arrival'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'15.  Whether going to present research paper : '.$result['research_paper'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'16. Title of Paper:  '.$result['title_of_paper'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'17. Attach the accepted paper, acceptance letter, NOC from co-authors: '.($result['research_paper']=="Yes"?url($result['attach_paper_acceptance_letter']):$result['attach_paper_acceptance_letter']),1,1);

$pdf->cell(10,7,'',0,0);
$pdf->MultiCell(170,4,'18. Total cost involved Rs. '.$result['total_cost'].' (Rupees '.$result['total_cost_words'].' Only)
Please give cost details (Attach separate sheet , if necessary) '.($result['cost_details_file']=="Y"?url($result['cost_details']):$result['cost_details']).'
Registration Fee:'.$result['registration_fees'].'
TA: '.$result['transportation_allowance'].'
Others, If any (Special): '.$result['other_costs'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->cell(170,7,'19. CGPA of the candidate (Only for UG / M.Tech and M.Sc students) : '.$result['cgpa'],1,1);

$pdf->cell(10,7,'',0,0);
$pdf->MultiCell(170,4,'20. For M.Tech, M.Sc and PhD candidates : Whether one paper has been accepted for publication in SCI Journal in Last two years (State Yes / No and attach the acceptance letter): '.$result['sci_journal'],1,1);

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
// $pdf->Cell(0,10,'www.google.com',0,1,'C');



$pdf->Output();
}
?>

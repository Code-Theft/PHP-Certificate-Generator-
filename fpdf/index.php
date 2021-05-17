<?Php
require('fpdf.php'); //import fpdf file
$pdf = new FPDF(); 
$pdf->AddPage("L");  //for landscpae 
$pdf->Image('simple.jpg',0,0,290,230); //set width and height 
$pdf->Output();
?>
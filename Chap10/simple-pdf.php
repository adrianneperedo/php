<?php
require("fpdf/fpdf.php"); 
$pdf = new FPDF();
$pdf->addPage();
$pdf->setFont("Arial", 'B', 20);
$pdf->cell(40, 10, "Yo, What's Up!");
$pdf->output();
?>
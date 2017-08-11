<html>
	<head>
		<title>PDF</title>
	</head>
<body>
<h3>PDF</h3>
<?php
include ('./fpdf181/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
//Horizontal increase: 15
// line= 10, 24, 38, 52, 66, 80, 94, 108
$height_alignment = getimagesize('img/100.png')[1]; 
$pdf->Image('img/100.png',10,(100-(($height_alignment/2)/3.86)));
$height_alignment = getimagesize('img/a09.png')[1]; 
$pdf->Image('img/a09.png',25,(100-(($height_alignment/2)/3.86)));
$height_alignment = getimagesize('img/d00.png')[1];
$pdf->Image('img/d00.png',40,(100-(($height_alignment/2)/3.86)));
$height_alignment = getimagesize('img/a09.png')[1];
$pdf->Image('img/a09.png',55,(100-(($height_alignment/2)/3.86)));
$height_alignment = getimagesize('img/b05.png')[1];
$pdf->Image('img/b05.png',70,(100-(($height_alignment/2)/3.86)));
$height_alignment = getimagesize('img/j02.png')[1];
$pdf->Image('img/j02.png',85,(100-(($height_alignment/2)/3.86)));
$height_alignment = getimagesize('img/s02.png')[1];
$pdf->Image('img/s02.png',100,(100-(($height_alignment/2)/3.86)));
$height_alignment = getimagesize('img/e07.png')[1];
$pdf->Image('img/e07.png',115,(100-(($height_alignment/2)/3.86)));
$pdf->SetFont('Arial','B',16);
$pdf->Cell(1,1,$height_alignment);
$pdf->Cell(1,10,'Hello World!');
$pdf->Cell(1,20,'Powered by FPDF.');
$pdf->Output();
?>
</body>
</html>
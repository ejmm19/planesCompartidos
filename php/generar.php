<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo

    $this->Image('../img/escudo.png',10,8,27);
    // Arial bold 15
    $this->SetFont('Arial','B',9);
    // Movernos a la derecha
    $this->Cell(77);
    // Título
    $this->Cell(30,1,utf8_decode('UNIVERSIDAD DE CÓRDOBA'),'C');
    $this->Cell(50);
    $this->Cell(30,1,utf8_decode(''),'C');
    // Salto de línea
    $this->Ln(3);
    
    $this->Cell(57);    
    $this->Cell(30,1,utf8_decode('FACULTAD DE EDUCACIÓN Y CIENCIAS HUMANAS'),'C');
    $this->Cell(50);
    $this->Cell(30,1,utf8_decode(''),'C');
    $this->Ln(3);
    $this->Cell(75);
    $this->Cell(30,1,utf8_decode('PRÁCTICA PEDAGÓGICA'),'C');
    $this->Cell(54);
    $this->Cell(30,1,utf8_decode(''),'C');
    $this->Ln(3);
    $this->Cell(81);
    $this->Cell(30,1,utf8_decode('PLAN DE CLASES'),'C');
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12); 

$pdf->Output();
?>
<?php 

echo "listo";
 ?>












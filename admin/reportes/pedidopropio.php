<?php

$informe = '../librerias/fpdf/fpdf.php';
require '../php/conexion.php';

if (file_exists($informe)){
    require $informe;
}else{
    echo "La clase FPDF no se encuentra";
} 

class PDF extends FPDF
    {
        function Header()
        {
            $this->SetFont('Arial','B',15);
            $this->image('../../img/pasteleria.png',60,10,15,);
            $this->SetX(80);
            $this->Cell(70,20,'PASTELERIA ALICE DULCES',0,1,'C');
            $this->SetFont('Arial','B',10);
            $this->SetY(30);
            $this->SetX(74);
            $this->Cell(70,14,'INFORME DE LOS PEDIDOS','B',0,'C');
            $this->Ln(20);
        }


        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }
    
    $pdf = new PDF();
    $pdf->AddPage('P','A4');


   
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(50,12,'Nombre',1,1,'C');
    $pdf->Cell(50,12,'Precio',1,1,'C');
    $pdf->Cell(50,12,'Stock',1,1,'C');
    $pdf->Cell(50,12,'Descripcion',1,1,'C');
    $pdf->Ln();

    $pdf->Output();


?>
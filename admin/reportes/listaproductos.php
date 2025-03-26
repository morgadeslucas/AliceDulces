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
            $this->Cell(70,14,'INFORME DE LOS PRODUCTOS','B',0,'C');
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
    $pdf->Cell(45,10,'Nombre',1,0,'C');
    $pdf->Cell(25,10,'Precio',1,0,'C');
    $pdf->Cell(20,10,'Stock',1,0,'C');
    $pdf->Cell(105,10,'Descripcion',1,0,'C');
    $pdf->Ln();

    $sql = "SELECT * FROM producto";
    $result = $conexion->query($sql);

    while($fila = $result->fetch_assoc()){
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(45,12,$fila['nombre_producto'],1,0,'C');
        $pdf->Cell(25,12,$fila['precio'],1,0,'C');
        $pdf->Cell(20,12,$fila['stock_disponible'],1,0,'C');
        $pdf->Cell(105,12,utf8_decode($fila['descripcion']),1,0,'L');
        $pdf->Ln();
    }
    // $pdf->SetFont('Arial','',10);
    // $pdf->Cell(45,6,'Pastel',1,0,'C');
    // $pdf->Cell(40,6,'40000',1,0,'C');
    // $pdf->Cell(40,6,'100',1,0,'C');
    // $pdf->Cell(70,6,utf8_decode('Título de mi documento PDF'),1,0,'C');
    // $pdf->Ln();



    $pdf->Output();


?>
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
    $pdf->Cell(30,10,'Nombre Cliente',1,0,'C');
    $pdf->Cell(75,10,'Correo',1,0,'C');
    $pdf->Cell(50,10,'Nombre producto',1,0,'C');
    $pdf->Cell(17,10,'Cantidad',1,0,'C');
    $pdf->Cell(20,10,'Total',1,0,'C');
    $pdf->Ln();

    $sql = "SELECT 
    pedido.id_pedido,
    pedido.nombre_cliente,
    pedido.direccion_cliente,
    pedido.telefono_contacto,
    pedido.correo_cliente,
    pedido.fecha_pedido,
    pedido.fecha_caducidad,
    pedido.cantidad,
    pedido.total,
    pedido.estado,
    producto.nombre_producto,
    producto.precio
    FROM 
        pedido
    INNER JOIN 
        producto
    ON 
        pedido.id_producto = producto.id_producto";
    $result = $conexion->query($sql);

    while($fila = $result->fetch_assoc()){
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(30,12,$fila['nombre_cliente'],1,0,'C');
        $pdf->Cell(75,12,$fila['correo_cliente'],1,0,'C');
        $pdf->Cell(50,12,$fila['nombre_producto'],1,0,'C');
        $pdf->Cell(17,12,$fila['cantidad'],1,0,'C');
        $pdf->Cell(20,12,utf8_decode($fila['total']),1,0,'C');
        $pdf->Ln();
    }


    $pdf->Output();


?>
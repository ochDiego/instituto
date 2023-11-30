<?php

require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      
      $this->Image('logo.jpg', 120, 15, 50); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 10); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(85); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('Instituto Superior de Formación Técnica ANGACO'), 0, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

      /* UBICACION */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(100, 10, utf8_decode(""), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(59, 10, utf8_decode(""), 0, 0, '', 0);
      $this->Ln(5);

      /* COREEO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode(""), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode(""), 0, 0, '', 0);
      $this->Ln(10);

      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(228, 100, 0);
      $this->Cell(85); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("Comprobante de Inscripción "), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(228, 100, 0); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 8);
      $this->Cell(15, 15, utf8_decode('N° iNSCR.'), 1, 0, 'C', 1);
      $this->Cell(35, 15, utf8_decode('FECHA INSCR.'), 1, 0, 'C', 1);
      $this->Cell(30, 15, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
      $this->Cell(30, 15, utf8_decode('APELLIDO'), 1, 0, 'C', 1);
      $this->Cell(35, 15, utf8_decode('MATERIA'), 1, 0, 'C', 1);
      $this->Cell(35, 15, utf8_decode('PROFESOR'), 1, 0, 'C', 1);
      $this->Cell(35, 15, utf8_decode('CICLO LECTIVO'), 1, 0, 'C', 1);
      $this->Cell(62, 15, utf8_decode('CARRERA'), 1, 1, 'C', 1);
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

require '../conexion.php';
$consulta = "SELECT i.id AS id, i.fecha AS fecha, a.nombre AS alumno, a.apellido AS apellido, m.nombre AS materia, p.nombre AS profesor, mc.periodo AS ciclo_lectivo, c.nombre AS carrera FROM inscripcion_mesa i JOIN mesa_examen e ON e.id= i.mesa_examen_id JOIN alumnos a ON a.id= i.alumno_id JOIN materias m ON m.id = e.materia_id JOIN profesores p ON p.id = e.profesor_id JOIN materia_carrera mc ON mc.id = e.materia_id JOIN carreras c ON c.id = e.carrera_id WHERE i.estado = 1";
$resultado = $conn->query($consulta);

$pdf= new PDF();
$pdf->AliasNbPages();
$pdf->AddPage("landscape"); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas
$pdf->SetFont('Arial', '', 8);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

while($row = $resultado->fetch_assoc()){
   
   $pdf->Cell(15, 15, utf8_decode($row['id']), 1, 0, 'C', 0);
   $pdf->Cell(35, 15, utf8_decode($row['fecha']), 1, 0, 'C', 0);
   $pdf->Cell(30, 15, utf8_decode($row['alumno']), 1, 0, 'C', 0);
   $pdf->Cell(30, 15, utf8_decode($row['apellido']), 1, 0, 'C', 0);
   $pdf->Cell(35, 15, utf8_decode($row['materia']), 1, 0, 'C', 0);
   $pdf->Cell(35, 15, utf8_decode($row['profesor']), 1, 0, 'C', 0);
   $pdf->Cell(35, 15, utf8_decode($row['ciclo_lectivo']), 1, 0, 'C', 0);
   $pdf->Cell(62, 15, utf8_decode($row['carrera']), 1, 1, 'C', 0);

}


$pdf->Output('ComprobanteISFTANGACO.pdf', 'D');//nombreDescarga, Visor(I->visualizar - D->descargar)

<?php
//AddPage(orientacion[PORTRAIT, LANDSCAPE], tamaño[A3, A4, A5, LETTER, LEGAL]),
//SetFont(tipo[COURIER, HELVETICA, ARIAL, TIMES, SYMBOL, ZAPDINGBATS], estilo[normal, B, I, U], tamaño),
//Cell(ancho, alto, texto, bordes, ?, alineacion, rellnear, link),
//OutPut(destino[I, D, F, S]), nombre_archivo, utf8)
//call to file
require('fpdf/fpdf.php');

//Instantiation
$fpdf = new FPDF();
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetFont('Arial', 'b', 12);
$fpdf->Cell(25, 5, 'C.C', 1, 0, false);
$fpdf->Cell(50, 5, 'Nombre completo', 1, 0, false);
$fpdf->Cell(115, 5, utf8_decode('Dirección'), 1, 0, false);
$fpdf->Ln();
$fpdf->Cell(25, 5, 'Cargo', 1, 0, false);
$fpdf->Cell(30, 5, utf8_decode('Área'), 1, 0, false);
//close
$fpdf->OutPut();
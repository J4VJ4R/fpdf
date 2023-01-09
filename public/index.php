<?php
//AddPage(orientacion[PORTRAIT, LANDSCAPE], tamaño[A3, A4, A5, LETTER, LEGAL]),
//SetFont(tipo[COURIER, HELVETICA, ARIAL, TIMES, SYMBOL, ZAPDINGBATS], estilo[normal, B, I, U], tamaño),
//Cell(ancho, alto, texto, bordes, ?, alineacion, rellnear, link),
//OutPut(destino[I, D, F, S]), nombre_archivo, utf8)
//$spdf->Image(ruta, posiciónx, posicióny, alto, ancho, tipo, link)
//call to file
require('fpdf/fpdf.php');
$fpdf = new FPDF();
//Instantiation

class pdf extends FPDF{
    public function header(){
        $this->Image('img/3.png', 0, 0, 216, 280,  'png');
    }
    public function footer(){
        
    }
}
$fpdf = new pdf();
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetFont('Arial', 'b', 25);
$fpdf->SetY(80);
$fpdf->Write(15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae magna in magna condimentum fermentum nec a enim. Nullam a pulvinar turpis. Praesent pulvinar volutpat diam, ut lacinia orci dictum non. Aenean sodales nibh quis mauris mattis pulvinar. Aenean magna ante, lacinia nec sollicitudin at, egestas eu eros.');
$fpdf->Write(15, '"Juan"');
// __________________________
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetFont('Arial', 'b', 25);
$fpdf->SetY(80);
$fpdf->Write(15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae magna in magna condimentum fermentum nec a enim. Nullam a pulvinar turpis. Praesent pulvinar volutpat diam, ut lacinia orci dictum non. Aenean sodales nibh quis mauris mattis pulvinar. Aenean magna ante, lacinia nec sollicitudin at, egestas eu eros.');
$fpdf->Write(15, '"Juan"');
$fpdf->Close();
$fpdf->OutPut('D', 'Mensajes.pdf');
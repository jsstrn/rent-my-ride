<?php

class MpdfController extends AppController {

public $components = array('Mpdf.Mpdf'); 

public function testpdf() { 
    $this->Mpdf->init(); 
    $this->Mpdf->setFilename('file.pdf'); 
    $this->Mpdf->setOutput('D'); 
    // can call any mPDF method via $this->Mpdf->pdf 
    $this->Mpdf->pdf->SetWatermarkText("Draft"); 
}
}


?>
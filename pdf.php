<?php
    require_once("fpdf/fpdf.php");
    session_start();
    $pdf= new FPDF("P","pt","A4");

    $pdf->AddPage();
    
    $pdf->SetFont('arial','B',18);
    $pdf->Cell(0,5,"Nome do usuario: ".$_SESSION['nome'],0,1,'L');
    $pdf->Ln(8);
    $pdf->Cell(0,5,"Email do usuario: ".$_SESSION['email'],0,1,'L');
    $pdf->Ln(8);

    $pdf->Cell(0,5,"Arquivos:","B",1,'L');
    $pdf->Ln(8);

    $directory = 'uploads/';
    $file = scandir($directory, 1);
    for($cont=0; $cont<2; $cont++){
        array_pop($file);
    }
    for($c=0; $c < count($file); $c++){
        $arquivo = $file[$c];
        $pdf->Cell(0,5,"".$arquivo,0,1,'L');
        $pdf->Ln(8);
    }
    $pdf->Output();
?>
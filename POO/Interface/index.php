<?php

use POO\Interface\BasicPDF;
use POO\Interface\PDFDowloaderService;
use POO\Interface\PremiumPDF;

require_once './../../vendor/autoload.php';

$basicPDF = new BasicPDF();

//echo $basicPDF->downloadPDF();
//echo $basicPDF->downloadPNG();

$pdfDownloaderService = new PDFDowloaderService();
echo $pdfDownloaderService->downloadPDF($basicPDF);

$premiumPDF = new PremiumPDF();

echo $pdfDownloaderService->downloadPDF($premiumPDF);
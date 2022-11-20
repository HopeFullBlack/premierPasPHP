<?php

namespace POO\Interface;

class PDFDowloaderService{
    public function downloadPDF(PDFDownloaderInterface $pdfDownloader): string
    {
        return $pdfDownloader->downloadPDF();
    }
}
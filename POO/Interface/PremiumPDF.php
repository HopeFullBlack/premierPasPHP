<?php

namespace POO\Interface;

class PremiumPDF implements PDFDownloaderInterface
{
    public function downloadPDF(): string
    {
        return '<p>PDF téléchargé (premium)</p>';
    }
}


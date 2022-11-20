<?php

namespace POO\Interface;

class BasicPDF implements PDFDownloaderInterface, PNGDownloaderInterface
{
    public function __construct()
    {
        echo 'ok';
    }

    public function downloadPDF(): string
    {
        return '<p>PDF téléchargé (basic)</p>';
    }

    public function downloadPNG(): string
    {
        return "<p>PDF convertit en PNG avant l'upload</p>";
    }
}

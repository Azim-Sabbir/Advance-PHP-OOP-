<?php


namespace App\services;


use App\controllers\FirstController;

class PdfFormatter
{
    public function formatter(FirstController $page)
    {
        echo "<pdf>{$page->getTile()}</pdf>";
        echo PHP_EOL;
        echo "<pdf>{$page->getContent()}</pdf>";
    }
}
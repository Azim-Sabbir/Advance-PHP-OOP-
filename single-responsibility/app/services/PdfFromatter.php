<?php


namespace App\services;


use App\controllers\PageController;

class PdfFromatter
{
    public function format(PageController $page)
    {
        echo "<pdf>{$page->getTile()}</pdf>";
        echo PHP_EOL;
        echo "<pdf>{$page->getContent()}</pdf>";
    }
}
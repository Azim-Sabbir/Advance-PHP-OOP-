<?php
namespace App\services;

use App\controllers\PageController;

class HtmlFormatter
{
    public function format(PageController $page)
    {
        echo "<h1>{$page->getTile()}";
        echo PHP_EOL;
        echo "<h1>{$page->getContent()}";
    }
}
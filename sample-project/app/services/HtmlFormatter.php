<?php

namespace App\services;
use App\controllers\FirstController;

class HtmlFormatter
{
    public function formatter(FirstController $page)
    {
        echo "<p>{$page->getTile()}</p>";
        echo PHP_EOL;
        echo "<p>{$page->getContent()}</p>";
    }
}

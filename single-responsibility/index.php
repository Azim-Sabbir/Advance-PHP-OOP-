<?php
require __DIR__ . "/vendor/autoload.php";

use App\controllers\PageController;

$pageController = new PageController('bangladesh', 'is beautiful');
$page = new \App\services\HtmlFormatter();
echo $page->format($pageController);
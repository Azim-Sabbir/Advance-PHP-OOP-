<?php
require __DIR__ . "/vendor/autoload.php";

use App\controllers\FirstController;
use App\services\PdfFormatter;

$firstController = new FirstController('bangladesh','is beautiful');
$formatter = new PdfFormatter();
echo $formatter->formatter($firstController);
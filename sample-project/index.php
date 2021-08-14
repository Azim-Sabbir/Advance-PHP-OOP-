<?php
require __DIR__ . "/vendor/autoload.php";

use App\controllers\FirstController;

$firstController = new FirstController();
$firstController->dispatch();
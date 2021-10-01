<?php
//require __DIR__ . "/MongoDbDriver.php";
require __DIR__ . "/MySqlDriver.php";
//require __DIR__."/BetterDbDriver.php";
//require __DIR__."/Database.php";

//$connection = new MongoDbDriver();
$connection = new MySqlDriver();

echo $connection->connection();
echo PHP_EOL;
echo $connection->save();
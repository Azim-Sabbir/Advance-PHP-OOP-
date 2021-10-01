<?php

//require __DIR__ . "/Database.php";
require __DIR__ . "/BetterDbDriver.php";

class MySqlDriver implements BetterDbDriver
{
    public function connection()
    {
        echo "connected";
    }

    public function save()
    {
        echo 'saving using MySql';
    }
}
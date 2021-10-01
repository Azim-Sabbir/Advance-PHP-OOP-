<?php

require __DIR__ . "/Database.php";

class MongoDbDriver extends Database
{

    public function save()
    {
        echo 'saving using MongoDB Driver';
    }
}
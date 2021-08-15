<?php

abstract class Database
{
    public function connection()
    {
        echo "connected";
    }

    abstract public function save();
}
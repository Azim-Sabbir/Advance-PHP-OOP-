<?php

interface BetterDbDriver
{
    public function connection();

    public function save();
}
<?php

namespace App\controllers;

trait BaseController
{
    public function dispatch()
    {
        echo "this is dispatch from base Controller and this is a trait for using multiple inheritance";
    }
}

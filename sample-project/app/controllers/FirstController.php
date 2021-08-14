<?php

namespace App\controllers;

class FirstController extends Controller
{
    use BaseController;

    public function hello()
    {
        echo "hi";
    }

//    public function validation()
//    {
//        echo "validated from overrided class";
//    }
}

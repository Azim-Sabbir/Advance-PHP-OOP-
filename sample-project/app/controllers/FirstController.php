<?php

namespace App\controllers;

class FirstController extends Controller
{
    private $title, $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function getTile()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }
//    public function formatPDF()
//    {
//        echo "<pdf>{$this->getTile()}</pdf>";
//        echo PHP_EOL;
//        echo "<pdf>{$this->getContent()}</pdf>";
//    }
    public function formatJSON()
    {
        echo json_encode($this->getTile());
    }
}

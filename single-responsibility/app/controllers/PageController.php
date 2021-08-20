<?php
namespace App\controllers;

class PageController
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
}
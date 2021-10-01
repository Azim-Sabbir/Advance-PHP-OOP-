<?php

require __DIR__ . "./vendor/autoload.php";

use Collections\Collection;

$myArray = [
    [
        "name"    => "azim sabbir",
        "age"     => 22,
        "hobby"   => 'coding',
        "country" => "bangladesh",
        "status"  => 1,

    ],
    [
        "name"    => "afsar sayhan",
        "age"     => 24,
        "hobby"   => 'reading',
        "country" => "bangladesh",
        "status"  => 0,
    ],
    [
        "name"    => "nafim sadaf",
        "age"     => 12,
        "hobby"   => 'gaming',
        "country" => "india",
        "status"  => 1,
    ],
];
//$collection = new Collection($myArray);
$filteredData = Collection::make($myArray)->filter(function ($key,$value) {
    return $value['age'] === 22;
})->toJson();
echo $filteredData;
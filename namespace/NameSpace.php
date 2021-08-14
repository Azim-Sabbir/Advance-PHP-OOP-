<?php

namespace MainApp;
require __DIR__ . "/FirstClass.php";
require __DIR__ . "/SecondClass.php";

//use FirstNameSpace\Student;
use SecondNameSpace\Student;

echo Student::hello();
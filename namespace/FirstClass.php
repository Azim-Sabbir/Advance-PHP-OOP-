<?php


namespace FirstNameSpace;

    class Student
    {
        public static function hello()
        {
            $nameSpace = __NAMESPACE__;
            echo $nameSpace.' says hello';
        }
    }

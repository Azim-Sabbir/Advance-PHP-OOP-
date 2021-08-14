<?php


namespace SecondNameSpace;


class student
{
    public static function hello()
    {
        $nameSpace = __NAMESPACE__;
        echo $nameSpace . ' says hello';
    }
}
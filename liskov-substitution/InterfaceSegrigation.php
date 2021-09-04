<?php

interface CommonEmployee
{
    public function takesBreak();

    public function takesSalary();

    public function attendsMeetings();

    public function combineAll();
}

interface Coders
{
    public function codes();
}

interface Managers
{
    public function communicatesWithCustomers();
}



class CoderEmployee implements CommonEmployee ,Coders {

    public function takesBreak()
    {
        echo "Coder Taking A break";
    }

    public function takesSalary()
    {
        echo "Coder Taking Salary";
    }

    public function attendsMeetings()
    {
        echo "Coder Attending Meetings";
    }

    public function codes()
    {
        echo "Coder Coding";
    }

    public function combineAll()
    {
        $this->takesBreak();
        $this->takesSalary();
        $this->attendsMeetings();
        $this->codes();
    }
}
class ManagerEmployee implements Managers ,CommonEmployee {
    public function takesBreak()
    {
        echo "Manager Taking A break";
    }

    public function takesSalary()
    {
        echo "Manager Taking Salary";
    }

    public function attendsMeetings()
    {
        echo "Manager Attending Meetings";
    }

    public function communicatesWithCustomers()
    {
        echo "manager Communicating";
    }
    public function combineAll()
    {
        $this->takesBreak();
        $this->takesSalary();
        $this->attendsMeetings();
        $this->communicatesWithCustomers();
    }
}



$Employee = new ManagerEmployee();
$Employee->combineAll();


//Liskov Substitution
//here we can break a Interface into many part and then concat them in the classes according to our needs
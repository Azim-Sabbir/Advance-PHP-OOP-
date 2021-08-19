<?php
require __DIR__ . "/vendor/autoload.php";

interface DataBaseDriver
{
    public function connection();

    public function save($table, $value);
}

class MySQL implements DataBaseDriver
{
    public function connection()
    {
        echo "connected via MySQL";

    }

    public function save($table, $value)
    {
        echo "INSERT INTO  {$table}  SET  {$value} ";
    }
}

class MongoDBDriver implements DataBaseDriver
{
    public function connection()
    {
        echo "connected via Mongo DB";

    }

    public function save($table, $value)
    {
        echo "INSERT INTO  {$table}  SET  {$value} ";
    }
}

class Category
{
    private $DB;

    public function __construct()
    {
        $this->DB = new MySQL(); //tightly coupled
    }

    public function insert()
    {
        $this->DB->connection();
        echo PHP_EOL;
        $this->DB->save('kids_category', 'toy');
    }
}

class SubCategory
{
    private $DB;

    public function __construct(DataBaseDriver $dataBaseDriver)
    {
        $this->DB = $dataBaseDriver; //loosely coupled ;(
    }

    public function insert()
    {
        $this->DB->connection();
        echo PHP_EOL;
        $this->DB->save('kids_Subcategory', 'toy');
    }
}

(new Category())->insert();
echo PHP_EOL;
(new SubCategory(new MongoDBDriver))->insert();

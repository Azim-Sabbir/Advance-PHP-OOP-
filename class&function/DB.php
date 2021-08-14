<?php


class DB
{
    protected $sql;

    public function __construct($table)
    {
        return $this->sql = "SELECT * FROM {$table}";
    }
    public static function table($table_name)
    {
        return new DB($table_name);
    }

    public function where($column,$condition,$value)
    {
        if (strpos($this->sql,'WHERE') === false)
        {
            $this->sql .= " WHERE {$column} {$condition} {$value}";
        }else{
            $this->sql .= " and {$column} {$condition} {$value}";
        }

        return $this;
    }

    public function all()
    {
        return $this->sql;
    }
}

$db = DB::table('cities')
    ->where('name','=','dhaka')
    ->where('area_id','=','5')
    ->all();
print $db;
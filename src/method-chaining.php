<?php
class DB
{
    protected $SQL;
    public function table($table)
    {
        $this->SQL = " SELECT * FROM {$table}";
        return $this;
        // we have to "return $this" class at the end of every method in method chaining otherwise we have to write 
        // new "function name"; every time we jump from one function to another.
    }

    public function where($column, $condition, $value)
    {
        if (strpos($this->SQL, "where") === -1) {
            //strpos returns -1 if it doesn't get any value.so we write -1 if value is null. 
            $this->SQL .= " WHERE {$column} {$condition} {$value}";
        } else {
            $this->SQL .= " && WHERE {$column} {$condition} {$value}";
        }

        return $this;
    }
    public function all()
    {
        return $this->SQL;
    }
}
$db = new DB();
echo $db->table('users')
    ->where('name', '=', 'sabbir')
    ->where('roll', '=', 100)
    ->all();

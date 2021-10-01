<?php


namespace Collections;


class Collection
{
    private $collect;

    public function __construct(array $collect)
    {
        $this->collect = $collect;
    }

    public static function make($collect)
    {
        return new static($collect);
    }

    public function filter(callable $callback)
    {
        $collections = [];
        foreach ($this->collect as $key => $value) {
            if ($callback($key, $value)) {
                $collections[] = $value;
            }
        }
        $this->collect = $collections;
        return $this;
    }

    public function map(callable $callback)
    {
        $collection = [];
        foreach ($this->collect as $key => $value) {
            $collections[] = $callback($value, $key);
         }
        $this->collect = $collection;
        return $this;
    }

    public function toJson()
    {
        return json_encode($this->collect);
    }
}
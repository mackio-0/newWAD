<?php

class QueryBuilder
{
    private $rawSql = "";
    private $table = "";

    function __construct($table)
    {
        $this->table = $table;
    }

    public function select(mixed $colums = "*")
    {
        $current = is_array($colums) ? implode(",", $colums) : $colums;
        $this->rawSql .= "SELECT $current FROM " . $this->table;
        return $this;
    }

    public function where($key, $operator, $value)
    {
        $current = str_contains($this->rawSql, "WHERE") ? "AND" : "WHERE";
        $this->rawSql .= " $current $key $operator $value";
        return $this;
    }

    public function order($key, $direction = "ASC")
    {
        $current = str_contains($this->rawSql, "ORDER BY") ? "," : "ORDER BY";
        $this->rawSql .= " $current $key $direction";
        return $this;
    }

    public function limit($limit, $offset = 0) {
        if (!str_contains($this->rawSql, "LIMIT")) {
            $this->rawSql .= " LIMIT $offset,$limit";
        }
        return $this;
    }

    public function sql()
    {
        return $this->rawSql;
    }
}

// class QueryBuilder
// {
//     public $data;

//     public function a()
//     {
//         $this->data .= "A method works";
//         return $this;
//     }

//     public function b()
//     {
//         $this->data .= "B method works";
//         return $this;

//     }

//     public function c()
//     {
//         $this->data .= "C method works";
//         return $this;
//     }

//     public function getData() {
//         return $this->data;
//     }
// }

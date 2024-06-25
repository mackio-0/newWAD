<?php

class C
{

    public static $z = "zzz";

    public function x()
    {
        return "this is X";
    }

    public static function y()
    {
        return "this is Y";
    }
}

// $a = new C;
// echo $a->x();
// echo $a->y();

echo C::y();
echo C::$z;
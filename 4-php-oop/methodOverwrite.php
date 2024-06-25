<?php

class A
{
    protected $z;
    public function __construct($z)
    {
        $this->z = $z;
    }

    public function x()
    {
        return "This is x from A";
    }
}

class B extends A
{
    protected $zz;
    public function __construct($z, $zz)
    {
        parent::__construct($z);
        $this->zz = $zz;
    }

    public function x()
    {
        return "x from B";
    }
}

$x = new B("z", "zzz");
echo $x->x();
<?php

class Circle extends Shape
{
    public function area($length)
    {
        return $length * 2;
    }

    public function showName()
    {
        return "This is circle.";
    }
}

<?php

class Square extends Shape
{
    public function area($length)
    {
        return pi() * $length * $length;
    }

    public function showName()
    {
        return "This is square.";
    }
}

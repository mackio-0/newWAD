<?php

trait File
{
    public function file()
    {
        return "File from post method.";
    }

    public function files()
    {
        return "Files from post method.";
    }

    public function save() {
        return "Save files from post method.";
    }
}
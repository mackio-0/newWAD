<?php

function autoLoader($className)
{
    $path = __DIR__ . '/classes/' . $className . '.php';

    // Check if the file exists before including
    if (file_exists($path)) {
        require_once $path;
    } else {
        // Handle the case when the file is not found (optional)
        throw new Exception("Class $className not found");
    }
}

spl_autoload_register('autoLoader');

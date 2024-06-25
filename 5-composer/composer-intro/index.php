<?php

use App\Mms\Dev;
// have to run composer dump-autoload after changing something to autoload setting in composer.json

require_once "./bootstrap.php";

print_r($_ENV);

$dev = new Dev;
print_r($dev);
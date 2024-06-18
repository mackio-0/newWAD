<?php

$port = 8080;
$startingPath = __DIR__."/public";
exec("php -S localhost:$port -t $startingPath");
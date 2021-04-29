<?php

require_once __DIR__. '/../vendor/autoload.php';


$hello = new \App\Wcs\SayHello();
echo $hello->world();

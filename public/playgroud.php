<?php

use Illuminate\Support\Collection;

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "vendor/autoload.php";



$collection =  new Collection([1,2,3,4,5,6,7,8]);

die(var_dump($collection));
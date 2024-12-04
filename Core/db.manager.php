<?php

use Core\Database;

require "Database.php";


$config = require base_path('config.php');

$db = new Database($config['database']);

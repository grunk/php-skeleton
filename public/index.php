<?php
require '../vendor/autoload.php';

use App\AppDemo;

$app = new AppDemo("world");
echo $app->sayHello();
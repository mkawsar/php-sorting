<?php
require_once __DIR__ . './../../vendor/autoload.php';

use function Src\Selection\selection;

$array = [3, 0, 2, 5, -1, 4, 1];

selection($array);

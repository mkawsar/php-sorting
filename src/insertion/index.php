<?php
require_once __DIR__ . './../../vendor/autoload.php';

use function Src\Insertion\insertion;

$array = [3, 0, 2, 5, -1, 4, 1];

insertion($array);

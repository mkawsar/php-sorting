<?php
require_once __DIR__ . './../../vendor/autoload.php';

use function Src\Merge\merge_sort;

$array = [100, 54, 7, 2, 5, 4, 1];
print_r(merge_sort($array));

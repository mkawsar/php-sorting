<?php
require_once __DIR__ . './../../vendor/autoload.php';

use Src\Heap\Heap;
use Src\Heap\Node;
use function Src\Heap\hearSort;

$heap = new Heap();

$array = [3, 0, 2, 5, -1, 4, 1];

foreach ($array as $key => $value) {
    $node = new Node($value);
    $heap->insertAt($key, $node);
    $heap->incrementSize();
}
$result = hearSort($heap);

print_r($result);

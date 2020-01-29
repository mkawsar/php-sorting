<?php
require_once __DIR__ . './../../vendor/autoload.php';

use function Src\Recursive\app;

$key = [
    'key1' => 1,
    'key2' => [
        'key3' => 1,
        'key4' => [
            'key5' => 1
        ]
    ]
];

app($key);

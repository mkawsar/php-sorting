<?php

namespace Src\Part1;

function app($data, $depth = 1)
{
    foreach ($data as $key => $value) {
        echo sprintf('%s %d %s', $key, $depth, PHP_EOL);
        if (is_array($value)) {
            app($value, $depth + 1);
        }
    }
}

<?php

namespace Src\Recursive;

function recursive($data, $depth = 1)
{
    foreach ($data as $key => $value) {
        echo sprintf('%s %d %s', $key, $depth, PHP_EOL);

        if (is_array($value)) {
            recursive($value, $depth + 1);
        }
    }
}

function app($data)
{
    if (!is_array($data)) {
        $message = sprintf("I not an array arguments pass '%s'", gettype($data));
        throw new \InvalidArgumentException($message);
    }

    recursive($data);
}

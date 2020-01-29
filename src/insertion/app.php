<?php

namespace Insertion;

function insertion($data)
{
    if (is_array($data)) {
        for ($i = 0; $i < count($data); $i++) {
            $val = $data[$i];
            $j = $i - 1;
            while ($j >= 0 && $data[$j] > $val) {
                $data[$j + 1] = $data[$j];
                $j--;
            }
            $data[$j + 1] = $val;
        }
    }
    print_r($data);
}
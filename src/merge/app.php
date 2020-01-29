<?php

namespace Src\Merge;

function merge_sort(array $data)
{
    if (count($data) == 1) return $data;

    $mid = count($data) / 2;
    $left = array_slice($data, 0, $mid);
    $right = array_slice($data, $mid);
    $left = merge_sort($left);
    $right = merge_sort($right);
    return merge($left, $right);
}

function merge($left, $right)
{
    $res = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] > $right[0]) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        } else {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
    }

    while (count($left) > 0) {
        $res[] = $left[0];
        $left = array_slice($left, 1);
    }

    while (count($right) > 0) {
        $res[] = $right[0];
        $right = array_slice($right, 1);
    }
    return $res;
}

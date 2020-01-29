<?php

namespace Src\Heap;

class Node
{
    private $_i;

    public function __construct($key)
    {
        $this->_i = $key;
    }

    public function getKey()
    {
        return $this->_i;
    }
}

class Heap
{
    private $heap_Array;
    private $_current_Size;

    public function __construct()
    {
        $hear_Array = [];
        $this->_current_Size = 0;
    }

    public function remove()
    {
        $root = $this->heap_Array[0];
        $this->heap_Array[0] = $this->heap_Array[--$this->_current_Size];
        $this->bubbleDown(0);
        return $root;
    }

    public function bubbleDown($index)
    {
        $larger_child = null;
        $top = $this->heap_Array[$index];
        while ($index < (int)($this->_current_Size / 2)) {
            $leftChild = 2 * $index + 1;
            $rightChild = $leftChild + 1;
            if ($rightChild < $this->_current_Size && $this->heap_Array[$leftChild] < $this->heap_Array[$rightChild]) {
                $larger_child = $rightChild;
            } else {
                $larger_child = $leftChild;
            }
            if ($top->getKey() >= $this->heap_Array[$larger_child]->getKey()) {
                break;
            }
            $this->heap_Array[$index] = $this->heap_Array[$larger_child];
            $index = $larger_child; // go down
        }
        $this->heap_Array[$index] = $top; // root to index
    }

    public function insertAt($index, $newNode)
    {
        $this->heap_Array[$index] = $newNode;
    }

    public function incrementSize()
    {
        $this->_current_Size++;
    }

    public function getSize()
    {
        return $this->_current_Size;
    }

    public function asArray()
    {
        $arr = [];
        for ($i = 0; $i < sizeof($this->heap_Array); $i++) {
            $arr[] = $this->heap_Array[$i]->getKey();
        }

        return $arr;
    }
}

function hearSort(Heap $heap)
{
    $size = $heap->getSize();
    // "sift" all nodes, except lowest level as it has no children
    for ($j = (int)($size / 2) - 1; $j >= 0; $j--) {
        $heap->bubbleDown($j);
    }
    // sort the heap
    for ($j = $size - 1; $j >= 0; $j--) {
        $BiggestNode = $heap->remove();
        // use same nodes array for sorted elements
        $heap->insertAt($j, $BiggestNode);
    }

    return $heap->asArray();
}

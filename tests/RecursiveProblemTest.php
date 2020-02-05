<?php

use PHPUnit\Framework\TestCase;
use function \Src\Recursive\app;

class RecursiveProblemTest extends TestCase
{
    public function test_print_depth_of_keys_with_a_nested_array()
    {
        $input = [
            'key1' => 1,
            'key2' => [
                'key3' => 1,
                'key4' => [
                    'key5' => 1
                ]
            ]
        ];
        app($input);

        $expectingResult = <<<EOT
key1 1 
key2 1 
key3 2 
key4 2 
key5 3 

EOT;
        $this->expectOutputString($expectingResult);
    }
}

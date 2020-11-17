<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit =10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');

        }

    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);
        }
    }
    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}

$myBooks = new Stack(10);

$myBooks->push('Hoang');
$myBooks->push('The ');
$myBooks->push('Luu');
$myBooks->push('21');
$myBooks->push('07');



echo $myBooks->pop() ."<br>";
echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";


$myBooks->push('2001');
$myBooks->push('100');
var_dump($myBooks->isEmpty());

echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";

var_dump($myBooks->isEmpty());
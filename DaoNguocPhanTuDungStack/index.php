<?php


include_once "Stack.php";

$arr = [1, 2, 10, 20, 50, -10, 200];

echo "Mang ban dau: <br>";
print("<pre>" . print_r($arr, true) . "</pre>");


$stack = new ReadingList();

foreach ($arr as $value) {
    $stack->push($value);
}

echo "Mang sau khi sap xep lai dao nguoc: <br>";

print("<pre>" . print_r($stack->getStack(), true) . "</pre>");


while (!$stack->isEmpty()) {
    echo $stack->pop() . "<br>";
}
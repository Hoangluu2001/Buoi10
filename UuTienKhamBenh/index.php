<?php

include_once "Queue.php";

$queue = new Queue();
$queue->enqueue("Smith", 5);
$queue->enqueue("Jones", 4);
$queue->enqueue("Fehrenbach", 6);
$queue->enqueue("Brown", 1);
$queue->enqueue("Ingram", 1);

$arr = [];
while (!$queue->isEmpty()) {
    $arr[] = $queue->dequeue();
}


foreach ($arr as $val) {
    echo $val[0] . " - " . $val[1] . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";


usort($arr, function ($b, $a) {
    return ;
});

foreach ($arr as $value) {
    echo $value[0] . " - " . $value[1] . "<br>";
}

print("<pre>" . print_r($queue, true) . "</pre>");


die();
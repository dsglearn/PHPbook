<?php

$amount = 54500;

$bills = [
    100 => 23,
    500 => 5,
    1000 => 1,
    5000 => 200,
];

for ($i = 0; $i <= 10000; $i++) {
    foreach ($bills as $denomination => $count) {
//    echo "купюр по $denomination осталось $count\n";
        $amount -= $denomination;
    }
}


echo "amount = $amount";
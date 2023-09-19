<?php
// Task 1: Looping with Increment using a Function

// Using For loop
function printEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
            $i += ($step - 1);
        }
    }
}
printEvenNumbers(1, 20, 2);

// Using While loop
function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
            $i += $step;
        } else {
            $i++;
        }
    }
}
printEvenNumbersWhile(1, 20, 2);

// Using do-while loop
function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
            $i += $step;
        }else {
            $i++;
        }
    } while ($i <= $end);
}

printEvenNumbersDoWhile(1, 20, 2);

// Task 2: Skip Multiples of 5
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue;
    }
    echo $i . " ";
}

// Task 3: Break on Condition
$n1 = 0;
$n2 = 1;

for ($i = 0; $i < 10; $i++) {
    if ($n1 > 100) {
        break;
    }

    echo $n1 . " ";

    $next = $n1 + $n2;
    $n1 = $n2;
    $n2 = $next;
}

// Task 4: Fibonacci Series printing using a Function
function printFibonacci($n) {
    $n1 = 0;
    $n2 = 1;

    for ($i = 0; $i < 10; $i++) {
        if ($n1 > 100) {
            break;
        }

        echo $n1 . " ";

        $next = $n1 + $n2;
        $n1 = $n2;
        $n2 = $next;
    }
}

printFibonacci(10);

?>
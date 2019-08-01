<?php
$arg1 = rand( 0, 99);
echo $arg1. "<br>";
$arg2 = rand( 0, 99);
echo $arg2. "<br>";
$operation = "*";
echo $operation ."<br>";
function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case '+': {
            echo ($arg1+$arg2);
            break;
        }
        case '-': {
            echo ($arg1-$arg2);
            break;
        }
        case '*': {
            echo ($arg1*$arg2);
            break;
        }
        case '/': {
            echo ($arg1/$arg2);
            break;
        }
    }
}
echo $arg1, $operation, $arg2, " = ", mathOperation($arg1, $arg2, $operation) ;
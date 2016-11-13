<?php
$a = 2;
$b = 0;
$operator = "/";
switch ($operator) {
    case "*":
        $c = $a*$b;
        echo "результат умножения = $c";
        break;
    case "/":
        if ($b == 0) {
            echo "на ноль делить нельзя.";
        } elseif ($c = $a/$b) {
            echo "результат деления = $c";
        }
        break;
    case "+";
        $c = $a+$b;
        echo "результат сложения = $c";
        break;
    case "-";
        $c = $a-$b;
        echo "результат вычитания = $c";
        break;
}
?>
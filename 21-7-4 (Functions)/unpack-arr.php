<?php
function add($a, $b)
{
    return $a + $b;
}

echo add(...[1, 2]) . "\n";

$a = [1, 2];
echo add(...$a) . "\n";

function sum() { // Phiên bản cũ, thay vì sử dụng ... token cho variable-length args thì phải dùng func_num_args(), func_get_arg(), func_get_args().
    $acc = 0;
    foreach (func_get_args() as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4) ."\n";
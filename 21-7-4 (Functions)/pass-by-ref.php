<?php
function add_some_extra(& ...$string) // & ...$var => OK
{
    $string[0] .= 'and something extra.';
}

function add_some_value($arg) { // pass-by-value
    $arg[] = 5;
    $arg[] = 6;
}

$str = 'This is a string, ';
add_some_extra($str);
echo $str . "\n";    // outputs 'This is a string, and something extra.'

$arg = [1,2,3];
add_some_value($arg);
var_dump($arg);
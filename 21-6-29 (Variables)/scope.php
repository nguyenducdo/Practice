<?php
$a = 1; /* global scope */ 

function test()
{ 
    // echo $a; /* undefined <= reference to local scope variable */ 
} 

test();
?>

<?php
$a = 1;
$b = 2;

function Sum()
{
    // global $a, $b;

    // $b = $a + $b; // Cách 1
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b']; // Cách 2
    include 'scope-sub.php';

} 

Sum();
// include 'scope-sub.php';
// echo $b, "\n";
?>
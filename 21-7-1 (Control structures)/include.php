<?php
// include 'include-sub.php';
// $a = 1;
// echo "$b\n";

function foo()
{
    global $color;

    include 'include-sub.php';

    echo "A $color $fruit\n";
}

/* vars.php is in the scope of foo() so     *
* $fruit is NOT available outside of this  *
* scope.  $color is because we declared it *
* as global.                               */

foo();                    // A green apple
echo "A $color $fruit\n";   // A green

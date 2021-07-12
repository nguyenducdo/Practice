<?php
class Foo {
    private static $used = 0;
    public $id;

    public function __construct() {
        $this->id = Foo::$used++;
    }

    public function __clone() {
        $this->id = Foo::$used++;
    }
}

$a = new Foo; // a -> ident 0 -> object 0 (1)
$b = $a; // b -> ident 1 -> object 0 (2)
$c = &$a; // c -> a -> ident 0 -> object 0 (2)
// show();

$a = new Foo; // a -> c -> ident 2 -> object 1 (1) | object 0 (1)
// show();
unset($a); // a -> NULL
// show();

$a = &$b; // a -> b -> ident 1 -> object 0 (1)
// show();

$a = NULL; // a -> b -> NULL | object 0 (0)
// show();

unset($b); // b -> NULL

$a = clone $c; // a -> ident 3 -> object 2 (1)
// show();

unset($c); // c -> NULL | object 1 (0)
// show();

$c = $a; // c -> ident 4 -> object 2 (2)
// show();

unset($a); // a -> NULL | object 2 (1)
// show();

$a = &$c; // a -> c -> ident 4 -> object 2 (1)
// show();

const ABC = TRUE;
if(ABC) {
  $a = NULL; 
} else {
  unset($a); 
}
// show();

function show() {
    global $a, $b, $c;
    var_dump($a);
    var_dump($b);
    var_dump($c);
}
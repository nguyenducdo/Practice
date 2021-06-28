<?php 
/**
* The callable types and normalizations are given in the table below:
*
*  Callable                        | Normalization                   | Type
* ---------------------------------+---------------------------------+--------------
*  function (...) use (...) {...}  | function (...) use (...) {...}  | 'closure'
*  $object                         | $object                         | 'invocable'
*  "function"                      | "function"                      | 'function'
*  "class::method"                 | ["class", "method"]             | 'static'
*  ["class", "parent::method"]     | ["parent of class", "method"]   | 'static'
*  ["class", "self::method"]       | ["class", "method"]             | 'static'
*  ["class", "method"]             | ["class", "method"]             | 'static'
*  [$object, "parent::method"]     | [$object, "parent::method"]     | 'object'
*  [$object, "self::method"]       | [$object, "method"]             | 'object'
*  [$object, "method"]             | [$object, "method"]             | 'object'
* ---------------------------------+---------------------------------+--------------
*  other callable                  | idem                            | 'unknown'
* ---------------------------------+---------------------------------+--------------
*  not a callable                  | null                            | false
*
* If the "strict" parameter is set to true, additional checks are
* performed, in particular:
*  - when a callable string of the form "class::method" or a callable array
*    of the form ["class", "method"] is given, the method must be a static one,
*  - when a callable array of the form [$object, "method"] is given, the
*    method must be a non-static one.
*
*/
?>

<?php

// An example callback function
function my_callback_function() {
    echo 'hello world!'. '<br />';
}

// An example callback method
class MyClass {
    static function myCallbackMethod() {
        echo 'Hello World!'. '<br />';
    }
}

// Type 1: Simple callback
call_user_func('my_callback_function');

// Type 2: Static class method call
call_user_func(array('MyClass', 'myCallbackMethod'));

// Type 3: Object method call
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));

// Type 4: Static class method call
call_user_func('MyClass::myCallbackMethod');

// Type 5: Relative static class method call
class A {
    public static function who() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::who')); // A

// Type 6: Objects implementing __invoke can be used as callables
class C {
    public function __invoke($name) {
        echo 'Hello ', $name, "\n", '<br />';
    }
}

$c = new C();
call_user_func($c, 'PHP!');
?>
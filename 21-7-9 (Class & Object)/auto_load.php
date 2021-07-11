<?php
spl_autoload_register(function ($class_name) {
    echo $class_name . "\n";
    if ($class_name === 'ITest') {
        throw new Exception("Unable to load $class_name");
    }
    include 'simple.php';
    include 'this-self.php';
});

try {
    $classy = new Classy();
    // $classy->show_me();
    class Few implements ITest
    {
    }
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

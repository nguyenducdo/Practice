<?php
namespace Technical_Portal;
// print_r(get_defined_constants());

// MAGIC CONST

echo "<h3>Example for __LINE__</h3>";
// print Your current line number i.e;4     
echo "You are at line number " . __LINE__ . "<br><br>";

echo "<h3>Example for __FILE__</h3>";
//print full path of file with .php extension    
echo __FILE__ . "<br><br>";

echo "<h3>Example for __DIR__</h3>";
//print full path of directory where script will be placed    
echo __DIR__ . "<br><br>";
//below output will equivalent to above one.  
echo dirname(__FILE__) . "<br><br>";

echo "<h3>Example for __FUNCTION__</h3>";
//Using magic constant inside function.    
function test()
{
    //print the function name i.e; test.   
    echo 'The function name is ' . __FUNCTION__ . "<br><br>";
}
test();

//Magic constant used outside function gives the blank output.    
function test_function()
{
    echo 'Hie';
}
test_function();
//give the blank output.   
echo  __FUNCTION__ . "<br><br>";


echo "<h3>Example for __CLASS__</h3>";
class JTP
{
    public function __construct()
    {;
    }
    function getClassName()
    {
        //print name of the class JTP.   
        echo __CLASS__ . "<br><br>";
    }
}
$t = new JTP;
$t->getClassName();

//in case of multiple classes   
class base
{
    function test_first()
    {
        //will always print parent class which is base here.    
        echo __CLASS__;
    }
}
class child extends base
{
    public function __construct()
    {;
    }
}
$t = new child;
$t->test_first();


echo "<h3>Example for __TRAIT__</h3>";
trait created_trait
{
    function jtp()
    {
        //will print name of the trait i.e; created_trait    
        echo __TRAIT__;
    }
}
class Company
{
    use created_trait;
}
$a = new Company;
$a->jtp();


echo "<h3>Example for __METHOD__</h3>";
class method
{
    public function __construct()
    {
        //print method::__construct    
        echo __METHOD__ . "<br><br>";
    }
    public function meth_fun()
    {
        //print method::meth_fun    
        echo __METHOD__;
    }
}
$a = new method;
$a->meth_fun();

echo "<h3>Example for __NAMESPACE__</h3>";
class name
{
    public function __construct()
    {
        echo 'This line will print on calling namespace.';
    }
}
$class_name = __NAMESPACE__ . '\name';
echo "namespace: $class_name<br />";
$a = new $class_name;

echo "<h3>Example for CLASSNAME::CLASS </h3>";
class javatpoint
{
}
echo javatpoint::class;    //ClassName::class   
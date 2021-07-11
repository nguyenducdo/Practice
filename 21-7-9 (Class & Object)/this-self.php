<?php
const OUTER_CONST = 'outer_const';

class Classy
{
    const INNER_CONST = 'inner_const';
    const CONSTANT = 'CONST';
    static $stat = 'Static';
    public $pub = 'Public';
    // public $non_static_prop = $pub; // ERROR
    public $non_static_prop = self::INNER_CONST; // OK
    // public $non_static_prop = OUTER_CONST; // OK
    private $priv = 'Private';
    protected $protec = 'Protected';

    public function __construct()
    {
    }

    public function show_me()
    {
        print 'self::CONSTANT ' . self::CONSTANT . "\n";
        print 'self::$stat ' . self::$stat . "\n";
        // print 'self::$pub ' . self::$pub . "\n"; // Access to undeclared static property
        // print 'self::$priv ' . self::$priv . "\n"; // Access to undeclared static property
        // print 'self::$protec ' . self::$protec . "\n"; // Access to undeclared static property
        // print '$this->stat' . $this->stat . "\n";  // Accessing static property Classy::$stat as non static
        // print '$this->CONSTANT' . $this->CONSTANT . "\n"; // Undefined property: Classy::$CONSTANT
        print '$this->pub ' . $this->pub . "\n";
        print '$this->priv ' . $this->priv . "\n";
        print '$this->protec ' . $this->protec . "\n";
        print '$this->non-static-prop ' . $this->non_static_prop . "\n";
    }
}

$me = new Classy();
$me->show_me();

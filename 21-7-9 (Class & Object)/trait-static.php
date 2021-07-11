<?php
trait Counter {
    public $prop = 'property';
    public static $static = 'foo';
    public static function inc () {
        static $c = 0;
        $c += 1;
        echo "$c\n";
    }
}

class C1 {
    use Counter;
    // protected $prop = 'property'; // Lỗi do khác visibility
    // public $prop = 'C1 property'; // Lỗi do khác initial value. Nếu ở trait ko có initial thì trong class cũng phải ko có
}

class C2 {
    use Counter;
    public $prop = 'property';
}

$c1 = new C1();
$c2 = new C2();
C1::inc();
$c1::inc();
$c1::inc();
echo C1::$static . "\n";
C1::$static = "modified";
echo $c1::$static . "\n";

$c2::inc();
echo  C2::$static . "\n";

echo "$c1->prop\n";
echo "$c2->prop\n";
<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

/* More complex example, with variables. */
class foo
{
    var $foo;
    var $bar;
    const BAR = <<<FOOBAR
Constant example
FOOBAR;

    public $baz = <<<FOOBAR
Property example
FOOBAR;

    static $bas = <<<LABEL
Nothing in here...
LABEL;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', self::BAR, 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.<br />
Now, I am printing some {$foo->bar[1]}.<br />
This should print a capital 'A': \x41<br />
$foo->baz<br />
EOT;
?>
<br />
<?php
var_dump(array(
    <<<EOD
foobar!
EOD
,
<<<"EOD"
foobar2!
EOD
,
));
?>
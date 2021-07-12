<?php
namespace Foo\Bar\Baz {
    const CONSTANT = 'constant value';
}

namespace {
    use Foo\Bar\Baz as Boz;
    // echo \Foo\Bar\Baz\CONSTANT . "\n";
    echo Boz\CONSTANT . "\n";
}
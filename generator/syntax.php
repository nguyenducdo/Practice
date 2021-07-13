<?php
function gen_one_to_three() {
    yield 1;
    yield 2;
    yield 3;
}

$generator = gen_one_to_three();
// foreach ($generator as $value) {
//     echo "$value ";
// }

echo $generator->rewind() . "\n";
echo $generator->current() . "\n";
echo $generator->next() . "\n";
// echo $generator->rewind() . "\n"; // already run
echo $generator->current() . "\n";
echo "\n";

function input_parser($input) {
    foreach(explode("\n", $input) as $line) {
        $fields = explode(";", $line);
        $id = array_shift($fields);
        yield $id => $fields;
    }
}

$input = <<<'EOF'
1;PHP;Likes dollar signs
2;Python;Likes whitespace
3;Ruby;Likes blocks
EOF;

foreach(input_parser($input) as $id => $fields) {
    echo "$id:\n";
    echo "    $fields[0]\n";
    echo "    $fields[1]\n";
}
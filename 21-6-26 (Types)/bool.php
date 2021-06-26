<?php
// == is an operator which tests
// equality and returns a boolean
if ($action == "show_version") {
    echo "The version is 1.23";
}

// this is not necessary...
if ($show_separators == TRUE) {
    echo "<hr>\n";
}

// ...because this can be used with exactly the same meaning:
if ($show_separators) {
    echo "<hr>\n";
}

var_dump(0 == 'all'); // TRUE, take care
echo "0 == 'all'<hr>\n";
var_dump((bool)'0'); // TRUE, take care
echo "(bool)'0'<hr>\n";
var_dump((bool)'00'); // TRUE, take care
echo "(bool)'00'<hr>\n";

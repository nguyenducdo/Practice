<?php
$a = 'hello';
$$a = 'world';
echo "${a} ${$a}\n";
echo "$a $hello\n";
?>

<?php
// Given these variables ...
$nameTypes    = array("first", "last", "company");
$name_first   = "John";
$name_last    = "Doe";
$name_company = "PHP.net";

// Then this loop is ...
foreach($nameTypes as $type)
  print ${"name_$type"} . "\n";

// ... equivalent to this print statement.
print "$name_first\n$name_last\n$name_company\n";
?>
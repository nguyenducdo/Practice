<?php echo 'if you want to serve PHP code in XHTML or XML documents,
                use these tags'; ?>
<br />
You can use the short echo tag to <?= 'print this string. ' ?>.
It's equivalent to <?php echo 'print this string' ?>.
<br />

<? echo 'this code is within short tags, but will only work ' .
    'if short_open_tag is enabled'; ?>
<br />
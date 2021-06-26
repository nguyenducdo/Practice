<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>

<p <?php if ($highlight): ?>class="highlight"<?php endif;?>>This is a paragraph.</p>

<?php
//  $file_contents  = '<?php die(); ?>' . "\n";
?>
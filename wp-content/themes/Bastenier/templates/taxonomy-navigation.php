<?php
  $pod = pods( $taxonomy->taxonomy, $taxonomy->term_id);
  $image = '';

  if ( $pod->exists() ) {
      $icon = $pod->get_field('visual')[0];
      $image = '<img src="'.$icon['guid'].'"/>';
  }
?>

<li>
  <a href="<?php echo str_replace(' ', '_', $taxonomy->name) ?>">
    <?php echo $image; ?>
    <span>
      <?php echo $taxonomy->name; ?>
    </span>
  </a>
</li>
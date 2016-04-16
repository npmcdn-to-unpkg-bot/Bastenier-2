<?php
  $pod = pods( $taxonomy->taxonomy, $taxonomy->term_id);
  $image = '';

  if ( $pod->exists() ) {
      $icon = $pod->get_field('visual')[0];
      $image = '<img src="'.$icon['guid'].'"/>';
  }
?>

<li>
    <div class="taxonomy-overview__navigation-image">
      <?php echo $image; ?>
    </div>
    <h3>
      <?php echo $taxonomy->name; ?>
    </h3>
</li>
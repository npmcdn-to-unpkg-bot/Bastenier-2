<?php
  $pod = pods( $taxonomy->taxonomy, $taxonomy->term_id);
  $image = '';
  $quote = '';

  if ( $pod->exists() ) {
      $icon = $pod->get_field('visual')[0];
      $image = '<img src="'.$icon['guid'].'"/>';
      $quote = $pod->get_field('quote');
  }
?>

<li id="<?php str_replace(' ', '_', $taxonomy->name)?>" class="taxonomy-item">
  <div class="mobile">
    <?php echo $image; ?>
    <h3>
      <?php echo $taxonomy->name; ?>
    </h3>
  </div>
  <div class="taxonomy-item__body">
    <h4 class="taxonomy-item__quote">
      <?php echo $quote; ?>
    </h4>
    <p>
      <?php echo $taxonomy->description; ?>
    </p>
  </div>
</li>
<?php
  $pod = pods( $taxonomy->taxonomy, $taxonomy->term_id);
  $image = '';
  $quote = '';

  if ( $pod->exists() ) {
      $icon = $pod->get_field('visual')[0];
      $image = '<img src="'.$icon['guid'].'"/>';
      $quote = '<h4>'. $pod->get_field('quote') .'</h4>';
  }
?>

<li id="<?php str_replace(' ', '_', $taxonomy->name)?>" class="taxonomy-item">
  <div class="mobile">
    <?php echo $image; ?>
    <span>
      <?php $taxonomy->name; ?>
    </span>
  </div>
  <div class="taxonomy-item__body">
    <h4>
      <?php echo $quote; ?>
    </h4>
    <p>
      <?php $taxonomy->description; ?>
    </p>
  </div>
</li>
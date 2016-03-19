<?php
  $icon = get_post_meta( $promotedPage->ID,'icon', true);
  $url = get_permalink($promotedPage->ID);
  $cta = get_post_meta( $promotedPage->ID,'cta_label', true);
?>

<div class="promoted-page">
  <figure class="promoted-page__icon">
    <?php echo '<img src="'. $icon['guid'].'" />'?>
  </figure>
  <div class="promoted-page__title">
    <h3>
      <?php echo $promotedPage->post_title?>
    </h3>
  </div>
  <?php echo '<a href="'.$url.'" class="cta">'.$cta.'</a>' ?>
</div>
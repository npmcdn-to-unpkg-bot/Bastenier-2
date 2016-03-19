<?php
  // check if the post has a Post Thumbnail assigned to it.
  if ( !has_post_thumbnail() ) {
    return;
  }
?>

<div class="banner">
  <div class="banner__image">
    <span class="corner corner--top"></span>
    <?php the_post_thumbnail('large'); ?>
    <span class="corner corner--bottom"></span>
  </div>
  <div class="banner__baseline">
    <?php echo get_post_meta($post->ID, 'baseline', true); ?>
  </div>
</div>
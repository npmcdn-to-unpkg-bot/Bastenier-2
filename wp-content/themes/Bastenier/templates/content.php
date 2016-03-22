<article <?php post_class(); ?>>
  <div class="post__image">
    <div class="image image--featured">
      <span class="corner corner--top"></span>
        <?php
          if(has_post_thumbnail ()){
            the_post_thumbnail('medium');
          } else {
            $fallbackImageID = get_option( 'bastenier_post_fallback_image', false )[0];
            echo wp_get_attachment_image ( $fallbackImageID, 'large');
          }
        ?>
      <span class="corner corner--bottom"></span>
    </div>
  </div>
  <div class="post__body">
    <header>
      <div class="post__meta">
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>

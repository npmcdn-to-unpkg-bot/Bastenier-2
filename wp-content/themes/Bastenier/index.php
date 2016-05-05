<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php

  $args = array(
    'post_type' => array( 'post'),
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'rechtstak',
            'field' => 'name',
            'terms' => 'verkeer'
        )
    ),
    'orderby' => 'modified',
  );

  $args['paged'] = get_query_var( 'paged' )
      ? get_query_var( 'paged' )
      : 1;

  $custom_query = new WP_Query($args);
  $temp_query = $wp_query;
  $wp_query   = NULL;
  $wp_query   = $custom_query;
?>

<div class="post-overview">
  <?php
    while (have_posts()) :
      the_post();
      get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
    endwhile;

    wp_reset_postdata(); // reset the query

    the_posts_navigation(); // navigation

    //reset wp_query
    $wp_query = NULL;
    $wp_query = $temp_query;
  ?>
</div>

<?php  ?>

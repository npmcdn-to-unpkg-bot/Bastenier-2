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
    'orderby' => 'modified',
    'paged' => get_query_var( 'paged' )
  );

  $postCategory = get_query_var( 'taxonomy' )
    ? get_query_var( 'taxonomy' )
    : '';

  if($postCategory != '') {
    $args['tax_query'] = array(
      array(
          'taxonomy' => 'rechtstak',
          'field' => 'name',
          'terms' => $postCategory,
      )
    );
  }

  set_query_var( 'currentFilter', $postCategory);
  get_template_part('templates/post-filters');

  $custom_query = new WP_Query($args);
  $temp_query = $wp_query;
  $wp_query   = NULL;
  $wp_query   = $custom_query;

  get_template_part('templates/post-overview');

  wp_reset_postdata(); // reset the query

  the_posts_navigation(); // navigation

  //reset wp_query
  $wp_query = NULL;
  $wp_query = $temp_query;
?>

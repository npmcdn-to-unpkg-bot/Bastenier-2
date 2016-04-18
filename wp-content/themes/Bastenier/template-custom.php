<?php
/**
 * Template Name: Homepage Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <section class="section">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  </section>
  <section class="section">
    <?php get_template_part('templates/promoted'); ?>
  </section>
<?php endwhile; ?>

<section class="section">
  <div class="section__title">
    <?php
      $page_for_posts_id = get_option( 'page_for_posts' );
      $page_for_posts = get_post ($page_for_posts_id);
      if($page_for_posts != NULL) {
        echo '<h2>'.$page_for_posts->post_title.'</h2>';
      }
    ?>
  </div>

  <?php $args = array(
    'numberposts' => 1,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );

    $recent_posts = get_posts( $args);
  ?>

  <div class="post-overview post-overview--expanded">
      <?php
        foreach ( $recent_posts as $post ){
          setup_postdata( $post );
          set_query_var( 'postOverview', $page_for_posts);
          get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
        }
      ?>
  </div>
</section>

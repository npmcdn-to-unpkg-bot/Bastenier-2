<?php

  // bastenier is the pod, promoted_category is the field
  $promotedCategoryID = get_option( 'bastenier_promoted_category' );

  $promotedPages = get_posts(array(
    'post_type' => array( 'overviewpage', 'page'),
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'pagecategory',
            'field' => 'id',
            'terms' => $promotedCategoryID
        )
    ),
    'orderby' => 'menu_order title',
  ));
?>

<div class="promoted-pages">
    <?php
      foreach($promotedPages as $page){
        set_query_var( 'promotedPage', $page);
        get_template_part('templates/page-promoted');
      }
    ?>
</div>
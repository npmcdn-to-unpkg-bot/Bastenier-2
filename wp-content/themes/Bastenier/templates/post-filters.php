<?php

  $terms = get_terms( array(
      'taxonomy' => 'rechtstak',
      'hide_empty' => false,
  ) );


?>
<div class="post-filters">
  <ul>
    <?php
      foreach ($terms  as $term ) {
          $querystring = '?taxonomy='.$term->slug;
          $url = get_permalink(get_option( 'page_for_posts' ));

          echo '<li> <a href="'. $url.$querystring .'">' . $term->name . '</a></li>';
        }
    ?>
  </ul>
</div>
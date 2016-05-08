<?php

  $terms = get_terms( array(
      'taxonomy' => 'rechtstak',
      'hide_empty' => false,
  ) );

  $url = get_permalink(get_option( 'page_for_posts' ));

?>
<div class="post-categories">
  <ul>
    <li><a class="cta cta--no-icon post-categories__all <?php echo $currentFilter == '' ? 'active' : ''; ?>" href="<?php echo $url ?>">[Recent Nieuws]</a></li>
    <li><a class="cta cta--no-icon post-categories__taxonomies <?php echo $currentFilter != '' ? 'active' : ''; ?>" href="#">[Bibliotheek]</a></li>
  </ul>
</div>
<div class="post-filters">
  <ul>
    <?php
      foreach ($terms  as $term ) {
          $querystring = '?taxonomy='.$term->slug;

          $class = $currentFilter == $term->slug ? 'active' : '';
          echo '<li> <a class="'.$class.'" href="'. $url.$querystring .'">' . $term->name . '</a></li>';
        }
    ?>
  </ul>
</div>
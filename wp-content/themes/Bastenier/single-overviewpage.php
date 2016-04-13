
<div class="page-header">
  <?php get_template_part('templates/banner'); ?>
</div>
<?php get_template_part('templates/content-single', get_post_type()); ?>
<?php

  $pillars = getTaxonomy('peiler');
  $matters = getTaxonomy('rechtstak');
  $lawyers = getTaxonomy('advocaat');

  $taxonomies = array_merge($pillars, $matters, $lawyers);

  function getTaxonomy($taxonomyName) {
    if(get_the_terms( get_the_ID(), $taxonomyName) == false){
      return [];
    }

    return get_the_terms( get_the_ID(), $taxonomyName);
    //return array_map(function($o) { return $o->term_id; }, get_the_terms( get_the_ID(), $taxonomyName));
  }
?>

<?php
  set_query_var( 'taxonomies', $taxonomies);
  get_template_part('templates/taxonomy-overview');
?>

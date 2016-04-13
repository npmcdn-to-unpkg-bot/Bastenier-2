
<section class="taxonomy-overview">
  <ul class="taxonomy-overview__navigation">
    <?php
      foreach ($taxonomies as &$taxonomy) {
          set_query_var( 'taxonomy', $taxonomy);
          get_template_part('templates/taxonomy-navigation');
      }
    ?>
  </ul>
  <ul class="taxonomy-overview__content">
    <?php
      foreach ($taxonomies as &$taxonomy) {
        set_query_var( 'taxonomy', $taxonomy);
        get_template_part('templates/taxonomy-content');

      }
    ?>
  </ul>
</section>
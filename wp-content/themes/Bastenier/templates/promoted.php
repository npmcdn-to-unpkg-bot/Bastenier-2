<div class="promoted-pages">
    <?php
      $promotedPages = wp_get_nav_menu_items ('Promoted pages');
      foreach($promotedPages as $page){
        set_query_var( 'promotedPage', get_post ($page->object_id));
        get_template_part('templates/page-promoted');
      }
    ?>
</div>
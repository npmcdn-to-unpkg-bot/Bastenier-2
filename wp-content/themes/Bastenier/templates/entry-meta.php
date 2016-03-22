<time class="updated" datetime="<?= get_post_time('c', true); ?>">
  <span class="updated__day">
    <?= get_the_date('j'); ?>
  </span>
  <?= get_the_date('F Y'); ?>
</time>
<div class="post__category">
  <figure>
    <?php
      $icon = get_post_meta( $postOverview->ID,'icon', true);
      echo '<img src="'. $icon['guid'].'" alt="news" />'
    ?>
  </figure>
  <span class="post__category-label">
      <?php
        $taxonomy = get_the_terms ($post, 'rechtstak')[0];
        if($taxonomy != NULL){
          echo $taxonomy->name;
        }
      ?>
  </span>
</div>

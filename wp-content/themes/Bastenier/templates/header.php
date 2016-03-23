<header>
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="<?php bloginfo('name'); ?>">
    </a>
    <div id="mobile-toggle">
      <a href="#" class="toggle">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/mobile-toggle.svg" alt="mobile toggle">
      </a>
    </div>
    <nav class="nav-primary">
      <div class="nav-primary__wrapper">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
        ?>
      </div>
    </nav>
  </div>
</header>

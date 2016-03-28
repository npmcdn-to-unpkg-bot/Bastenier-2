<footer class="footer">
  <div class="footer__body">
    <div class="footer__contact">
      <?php echo get_option( 'bastenier_footer_left', false );?>
    </div>
    <div class="footer__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo--small.svg" alt="Bastenier" />
    </div>
    <div class="footer__newsletter">
      [ontvang onze nieuwsbrief]
      <form>
        <input type="email" placeholder="[uw emailadres hier]"/>
        <button type="submit">[verstuur]</button>
      </form>
      <div class="footer__social">
      </div>
    </div>
    <div class="footer__brand">
      <?php echo get_option( 'bastenier_brand', false );?>
    </div>
  </div>
</footer>

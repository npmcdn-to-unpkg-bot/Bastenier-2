<footer class="footer">
  <div class="footer__body">
    <div class="footer__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo--small.svg" alt="Bastenier" />
    </div>
    <div class="footer__contact">
      <?php echo get_option( 'bastenier_footer_left', false );?>
    </div>
    <div class="footer__newsletter">
      <form>
        <label for="email">[ontvang <strong>onze nieuwsbrief: </strong>]</label>
        <input type="email" id="email" class="no-space" placeholder="[uw emailadres hier]"/>
        <input type="submit" class="no-space" value="[verstuur]"/></button>
      </form>
      <div class="footer__social">
      </div>
    </div>
    <div class="footer__brand">
      <?php echo get_option( 'bastenier_brand', false );?>
    </div>
  </div>
</footer>

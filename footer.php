
  <footer id="footer">

      <div class="wrapper">

        <div class="footer-content-contain">
          <?php gh_footer_type( get_theme_mod( 'gh_set_footer_type' ) ); ?>
        </div>

      </div>

      <div id="copyright">
        <span><?php echo get_theme_mod( 'gh_set_footer_copyright_text', '© Gutenberg\'s Hotel' ); ?></span>
      </div>


  </footer>


<?php wp_footer(); ?>
</body>
</html>

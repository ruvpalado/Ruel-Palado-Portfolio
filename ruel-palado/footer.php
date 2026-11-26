<footer class="site-footer">
    <div class="container footer-inner">
      <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Ruel V. Palado. All rights reserved.</p>
      <?php if ( is_front_page() ) : ?>
        <a href="#top" class="back-to-top">Back to top &uarr;</a>
      <?php else : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-to-top">&larr; Back to portfolio</a>
      <?php endif; ?>
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
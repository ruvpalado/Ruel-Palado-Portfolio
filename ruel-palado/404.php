<?php
get_header();
?>

<main>
  <section class="section">
    <div class="container">
      <div class="entry">
        <p class="kicker">404</p>
        <h2 class="section-head">Page not found</h2>
        <div class="entry-content">
          <p>The page you're looking for doesn't exist or has moved.</p>
        </div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Back to Home</a>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
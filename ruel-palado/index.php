<?php
get_header();
?>

<main>
  <section class="section">
    <div class="container">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class( 'entry' ); ?>>
            <header>
              <h2 class="section-head"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="entry-meta"><?php echo esc_html( get_the_date() ); ?></p>
            </header>
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
          </article>
        <?php endwhile; ?>
        <?php the_posts_pagination(); ?>
      <?php else : ?>
        <div class="entry">
          <h2 class="section-head">Nothing found</h2>
          <div class="entry-content">
            <p>No posts are published yet. Check back soon.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php
get_footer();
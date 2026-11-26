<?php
/**
 * Template Name: Request References
 */

get_header();
?>

<main>
  <section class="section">
    <div class="container ref-request-wrap">
      <div class="contact-form ref-request-card">
        <p class="kicker">References</p>
        <h2 class="ref-title">Get my references in your inbox</h2>
        <p style="color: var(--muted); font-size: 0.95rem;">
          Enter your email address and the complete list of my professional
          references — names, roles, organizations, and contact details — will be
          sent to you automatically.
        </p>
        <?php echo ruel_palado_cf7( 'references' ); ?>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
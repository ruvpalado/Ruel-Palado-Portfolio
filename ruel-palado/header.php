<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="top">
  <nav class="nav container" aria-label="Primary">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">Ruel Palado</a>
    <?php if ( is_front_page() ) : ?>
      <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="navMenu">
        <span></span><span></span><span></span>
      </button>
      <ul class="nav-menu" id="navMenu">
        <li><a href="#about" class="nav-link">About</a></li>
        <li><a href="#services" class="nav-link">Services</a></li>
        <li><a href="#skills" class="nav-link">Skills</a></li>
        <li><a href="#experience" class="nav-link">Experience</a></li>
        <li><a href="#work" class="nav-link">My Work</a></li>
        <li><a href="#contact" class="btn btn-outline btn-sm nav-cta">Hire Me</a></li>
      </ul>
    <?php else : ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" class="btn btn-outline btn-sm">Back to Portfolio</a>
    <?php endif; ?>
  </nav>
</header>
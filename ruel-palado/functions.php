<?php
/**
 * Theme functions and definitions.
 */

define( 'RUEL_PALADO_VERSION', '1.0.0' );
define( 'RUEL_PALADO_OWNER_EMAIL', 'ruvpalado@gmail.com' );

/**
 * Theme setup.
 */
function ruel_palado_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'ruel_palado_setup' );

/**
 * Enqueue styles and scripts.
 */
function ruel_palado_scripts() {
	wp_enqueue_style(
		'ruel-palado-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500;600;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'ruel-palado-style', get_stylesheet_uri(), array( 'ruel-palado-fonts' ), RUEL_PALADO_VERSION );
	wp_enqueue_script(
		'ruel-palado-script',
		get_template_directory_uri() . '/assets/js/script.js',
		array(),
		RUEL_PALADO_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'ruel_palado_scripts' );

/**
 * Admin notice when Contact Form 7 is not active.
 */
function ruel_palado_admin_notice() {
	if ( ! current_user_can( 'activate_plugins' ) || ruel_palado_cf7_active() ) {
		return;
	}
	echo '<div class="notice notice-warning"><p>';
	echo 'Ruel Palado theme: install and activate the <a href="' . esc_url( admin_url( 'plugin-install.php?s=contact+form+7&tab=search&type=term' ) ) . '">Contact Form 7</a> plugin for the contact and reference-request forms.</p></div>';
}
add_action( 'admin_notices', 'ruel_palado_admin_notice' );

/**
 * Contact Form 7 status.
 */
function ruel_palado_cf7_active() {
	return class_exists( 'WPCF7_ContactForm' );
}

/**
 * Look up an existing Contact Form 7 form by title.
 */
function ruel_palado_find_cf7_by_title( $title ) {
	$forms = get_posts(
		array(
			'post_type'   => 'wpcf7_contact_form',
			'post_status' => 'publish',
			'numberposts' => 100,
			'fields'      => 'ids',
		)
	);

	foreach ( $forms as $form_id ) {
		if ( get_the_title( $form_id ) === $title ) {
			return (int) $form_id;
		}
	}

	return 0;
}

/**
 * Sender address for outgoing form mail.
 */
function ruel_palado_mail_from() {
	$host = isset( $_SERVER['HTTP_HOST'] ) ? sanitize_text_field( wp_unslash( $_SERVER['HTTP_HOST'] ) ) : '';
	$host = preg_replace( '#^www\.#', '', $host );
	if ( empty( $host ) ) {
		$host = wp_parse_url( home_url(), PHP_URL_HOST );
	}
	return 'Ruel Palado <wordpress@' . $host . '>';
}

/**
 * Fallback shown when Contact Form 7 is unavailable.
 */
function ruel_palado_mailto_fallback() {
	return '<p style="color: var(--muted); font-size: 0.95rem;">Form unavailable. Please email <a href="mailto:' . esc_attr( RUEL_PALADO_OWNER_EMAIL ) . '" style="color: var(--accent-text);">' . esc_html( RUEL_PALADO_OWNER_EMAIL ) . '</a> directly.</p>';
}

/**
 * Register or reuse a Contact Form 7 form and return its shortcode.
 *
 * @param string $key Contact form key: 'contact' or 'references'.
 */
function ruel_palado_cf7( $key ) {
	if ( ! ruel_palado_cf7_active() ) {
		return ruel_palado_mailto_fallback();
	}

	$ids = get_option( 'ruel_palado_cf7_forms', array() );

	if ( empty( $ids[ $key ] ) ) {
		$maker = 'ruel_palado_make_cf7_' . $key;
		if ( function_exists( $maker ) ) {
			$created = $maker();
			if ( $created ) {
				$ids[ $key ] = (int) $created;
				update_option( 'ruel_palado_cf7_forms', $ids );
			}
		}
	}

	$form_id = isset( $ids[ $key ] ) ? (int) $ids[ $key ] : 0;
	if ( ! $form_id || ! wpcf7_contact_form( $form_id ) ) {
		return ruel_palado_mailto_fallback();
	}

	$title   = ( 'references' === $key ) ? 'Request References' : 'Contact';
	$shortcode = sprintf( '[contact-form-7 id="%d" title="%s"]', $form_id, esc_attr( $title ) );

	return do_shortcode( $shortcode );
}

/**
 * Default mail properties for created forms.
 */
function ruel_palado_cf7_mail_defaults() {
	return array(
		'to'                 => '',
		'from'               => '',
		'subject'            => '',
		'body'               => '',
		'additional_headers' => '',
		'attachments'        => '',
		'use_html'           => (bool) 1,
		'exclude_blank'      => (bool) 0,
		'suffix_html'        => (bool) 0,
	);
}

/**
 * Persist a Contact Form 7 form configuration.
 */
function ruel_palado_save_cf7( $title, $form, $mail, $mail_2, $additional_settings ) {
	$existing = ruel_palado_find_cf7_by_title( $title );
	if ( $existing ) {
		return $existing;
	}

	$defaults  = ruel_palado_cf7_mail_defaults();
	$mail      = wp_parse_args( $mail, $defaults );
	$mail_2    = wp_parse_args( array( 'active' => (bool) 0 ) + $mail_2, array( 'active' => (bool) 0 ) + $defaults );

	$properties = array(
		'form'                => $form,
		'mail'                => $mail,
		'mail_2'              => $mail_2,
		'messages'            => array(
			'mail_sent_ok'     => 'Your message has been sent. Thank you!',
			'mail_sent_ng'     => 'Something went wrong. Please try again or email ' . RUEL_PALADO_OWNER_EMAIL . ' directly.',
			'validation_error' => 'Please check the marked fields and try again.',
		),
		'additional_settings' => $additional_settings,
	);

	$contact = WPCF7_ContactForm::get_template( array( 'title' => $title ) );
	$contact->set_properties( $properties );
	$contact->save();

	return (int) $contact->id();
}

/**
 * Contact form.
 */
function ruel_palado_make_cf7_contact() {
	$form = '<div class="form-row">
<label><span>Name</span>[text* name placeholder "Your full name"]</label>
<label><span>Email</span>[email* email placeholder "you@company.com"]</label>
</div>
<label><span>Subject</span>[text subject placeholder "How can I help?"]</label>
<label><span>Message</span>[textarea* message x5 placeholder "Tell me a bit about your project or role..."]</label>
[submit class:btn class:btn-primary class:btn-block "Send Message"]';

	$mail = array(
		'to'                 => RUEL_PALADO_OWNER_EMAIL,
		'from'               => ruel_palado_mail_from(),
		'subject'            => '[Portfolio] [subject]',
		'body'               => "<h2>New Message from Portfolio</h2>\n<p><strong>Name:</strong> [name]<br>\n<strong>Email:</strong> [email]<br>\n<strong>Subject:</strong> [subject]</p>\n<p>[message]</p>",
		'additional_headers' => 'Reply-To: [email]',
	);

	return ruel_palado_save_cf7( 'Contact', $form, $mail, array(), "honeypot: true\n" );
}

/**
 * Reference-request form.
 */
function ruel_palado_make_cf7_references() {
	$form = '<label><span>Your email address</span>[email* email placeholder "you@company.com"]</label>
[submit class:btn class:btn-primary class:btn-block "Send Me the References"]';

	$body = '<p>Thank you for your interest in <strong>Ruel V. Palado</strong>&rsquo;s professional background. Below is his contact information and professional references.</p>
<p><strong>Contact Information</strong><br>
Email: <a href="mailto:ruvpalado@gmail.com">ruvpalado@gmail.com</a><br>
Phone: <a href="tel:+639451388883">+63 945 138 8883</a></p>
<p><strong>Professional References</strong></p>
<p><strong>Arriosto Fermin L. Flor</strong> — Nurse II, Department of Health<br>
Camarines Norte Provincial Hospital Compound, Daet, Camarines Norte 4600, Philippines<br>
Phone: +63 961 542 5748</p>
<p><strong>Edrichelle P. Nazarrea</strong> — Pharmacist, Bicol Medical Center<br>
Panganiban Drive, Naga City, Camarines Sur 4400, Philippines<br>
Phone: +63 906 087 5332</p>
<p><strong>Ronwald P. Gloriosa</strong> — Physical Therapist, Department of Health<br>
Camarines Norte Provincial Hospital Compound, Daet, Camarines Norte 4600, Philippines<br>
Phone: +63 945 764 1487</p>
<p>Should you need anything further — a full r&eacute;sum&eacute;, portfolio walk-through, or an interview — don&rsquo;t hesitate to reach out. Warm regards,<br>
<strong>Ruel V. Palado</strong></p>';

	$mail = array(
		'to'                 => '[email]',
		'from'               => ruel_palado_mail_from(),
		'subject'            => 'Professional References — Ruel V. Palado',
		'body'               => $body,
		'additional_headers' => 'Reply-To: ' . RUEL_PALADO_OWNER_EMAIL,
	);

	return ruel_palado_save_cf7( 'Request References', $form, $mail, array(), "honeypot: true\n" );
}

/**
 * Create support pages on theme activation.
 */
function ruel_palado_after_switch_theme() {
	$pages = array(
		'references'          => array(
			'title'    => 'References',
			'template' => 'page-references.php',
		),
		'request-references'  => array(
			'title'    => 'Request References',
			'template' => 'page-request-references.php',
		),
	);

	foreach ( $pages as $slug => $config ) {
		if ( get_page_by_path( $slug, OBJECT, 'page' ) ) {
			continue;
		}

		$page_id = wp_insert_post(
			array(
				'post_type'   => 'page',
				'post_status' => 'publish',
				'post_title'  => $config['title'],
				'post_name'   => $slug,
			)
		);

		if ( $page_id && ! is_wp_error( $page_id ) ) {
			update_post_meta( $page_id, '_wp_page_template', $config['template'] );
		}
	}
}
add_action( 'after_switch_theme', 'ruel_palado_after_switch_theme' );
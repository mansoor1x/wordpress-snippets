<?php
/**
 * BigDigit Consultants theme functions.
 *
 * @package BigDigit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BIGDIGIT_VERSION', wp_get_theme()->get( 'Version' ) );

require_once get_template_directory() . '/inc/contact-form.php';

/**
 * Theme setup.
 */
function bigdigit_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style(
		array(
			bigdigit_fonts_url(),
			'assets/css/theme.css',
		)
	);
}
add_action( 'after_setup_theme', 'bigdigit_setup' );

/**
 * Google Fonts stylesheet URL.
 *
 * @return string
 */
function bigdigit_fonts_url() {
	return 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap';
}

/**
 * Front-end styles and scripts.
 */
function bigdigit_enqueue_assets() {
	wp_enqueue_style( 'bigdigit-fonts', bigdigit_fonts_url(), array(), null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
	wp_enqueue_style( 'bigdigit-theme', get_theme_file_uri( 'assets/css/theme.css' ), array( 'bigdigit-fonts' ), BIGDIGIT_VERSION );
	wp_enqueue_script( 'bigdigit-theme', get_theme_file_uri( 'assets/js/theme.js' ), array(), BIGDIGIT_VERSION, array( 'in_footer' => true ) );
	wp_enqueue_script( 'bigdigit-tools', get_theme_file_uri( 'assets/js/tools.js' ), array(), BIGDIGIT_VERSION, array( 'in_footer' => true ) );
}
add_action( 'wp_enqueue_scripts', 'bigdigit_enqueue_assets' );

/**
 * Preconnect to Google Fonts.
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array
 */
function bigdigit_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'bigdigit_resource_hints', 10, 2 );

/**
 * Use the logo mark as the favicon when no Site Icon is set.
 */
function bigdigit_favicon() {
	if ( has_site_icon() ) {
		return;
	}
	printf( '<link rel="icon" href="%s" type="image/svg+xml">' . "\n", esc_url( get_theme_file_uri( 'assets/images/logo-mark.svg' ) ) );
}
add_action( 'wp_head', 'bigdigit_favicon' );

/**
 * Block styles selectable in the editor.
 */
function bigdigit_register_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'accent',
			'label' => __( 'Lime', 'bigdigit' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'ghost',
			'label' => __( 'Ghost (on dark)', 'bigdigit' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'line',
			'label' => __( 'Outline', 'bigdigit' ),
		)
	);
	register_block_style(
		'core/list',
		array(
			'name'  => 'checks',
			'label' => __( 'Check marks', 'bigdigit' ),
		)
	);
}
add_action( 'init', 'bigdigit_register_block_styles' );

/**
 * Pattern category for the theme's sections.
 */
function bigdigit_register_pattern_category() {
	register_block_pattern_category(
		'bigdigit',
		array( 'label' => __( 'BigDigit Sections', 'bigdigit' ) )
	);
}
add_action( 'init', 'bigdigit_register_pattern_category' );

/**
 * Company details used by the patterns. Filter to change them in code.
 *
 * @param string $key Detail name: email, hours, linkedin.
 * @return string
 */
function bigdigit_detail( $key ) {
	$details = apply_filters(
		'bigdigit_company_details',
		array(
			'email'    => 'info@bigdigitconsultants.com',
			'hours'    => __( 'Mon – Fri: 9:00 AM – 6:00 PM', 'bigdigit' ),
			'linkedin' => 'https://www.linkedin.com/company/bigdigit-consultants',
		)
	);
	return isset( $details[ $key ] ) ? $details[ $key ] : '';
}

/**
 * Inline SVG icons used across patterns.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function bigdigit_icon( $name ) {
	$icons = array(
		'mail'     => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 6.5 12 13l9-6.5M3 6h18v12H3z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>',
		'clock'    => '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.8"/><path d="M12 7v5l3 2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>',
		'linkedin' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM3 9.5h4V21H3zM9.5 9.5h3.8v1.6h.05c.53-1 1.83-2.05 3.77-2.05 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.1c0-1.22-.02-2.78-1.7-2.78-1.7 0-1.95 1.32-1.95 2.7V21h-4z"/></svg>',
		'ledger'   => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 4h11l3 3v13H5z M9 9h6M9 13h6M9 17h4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>',
		'people'   => '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="9" cy="8" r="3.2" fill="none" stroke="currentColor" stroke-width="1.8"/><path d="M3.5 19c.6-3 2.8-4.8 5.5-4.8s4.9 1.8 5.5 4.8M16 6.5a3 3 0 0 1 0 5.6M18 14.6c1.5.6 2.4 2.2 2.6 4.4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>',
		'percent'  => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 18 18 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="7.5" cy="7.5" r="2.5" fill="none" stroke="currentColor" stroke-width="1.8"/><circle cx="16.5" cy="16.5" r="2.5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>',
		'chart'    => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 20V10M10 20V4M16 20v-7M22 20H2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>',
		'shield'   => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 4 6v6c0 4.5 3.4 8.2 8 9 4.6-.8 8-4.5 8-9V6z M9 12l2 2 4-4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>',
		'pie'      => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 12a9 9 0 1 0 9-9v9z M15 3.5A9 9 0 0 1 20.5 9H15z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>',
		'logo'     => '<svg viewBox="0 0 40 40" aria-hidden="true"><rect width="40" height="40" rx="10" fill="#c6f25e"/><path d="M11 28V18M18 28V12M25 28V20M32 28V15" stroke="#0b3b2e" stroke-width="3.4" stroke-linecap="round"/></svg>',
	);
	return isset( $icons[ $name ] ) ? $icons[ $name ] : '';
}
